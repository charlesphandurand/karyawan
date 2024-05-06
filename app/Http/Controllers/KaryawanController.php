<?php

namespace App\Http\Controllers;

use App\DataTables\KaryawanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use App\Repositories\KaryawanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Yajra\DataTables\DataTables;
use App\Models\Karyawan;
use Response;
use Carbon\Carbon; // Import Carbon untuk manipulasi tanggal

class KaryawanController extends AppBaseController
{
    /** @var  KaryawanRepository */
    private $karyawanRepository;

    public function __construct(KaryawanRepository $karyawanRepo)
    {
        $this->karyawanRepository = $karyawanRepo;
    }

    /**
     * Display a listing of the Karyawan.
     *
     * @param KaryawanDataTable $karyawanDataTable
     * @return Response
     */
    public function index(KaryawanDataTable $karyawanDataTable)
    {
        return $karyawanDataTable->render('karyawans.index');
    }

    /**
     * Show the form for creating a new Karyawan.
     *
     * @return Response
     */
    public function create()
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created Karyawan in storage.
     *
     * @param CreateKaryawanRequest $request
     *
     * @return Response
     */
    public function store(CreateKaryawanRequest $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'nama_jabatan' => 'nullable', // Tambahkan validasi untuk kolom nama_jabatan
            'standart' => 'nullable',
            // tambahkan validasi untuk properti lainnya
        ]);

        $input = $request->all();
        $karyawan = $this->karyawanRepository->create($input);

        // Set nilai standar gaji hasil dari relasi dengan model Gaji
        $standar_gaji = $karyawan->gaji->standar_gaji;
        $karyawan->standart = $standar_gaji;

        // Set nilai sisa gaji
        $sisa_gaji = $request->uang_transport + $request->uang_makan - $request->pengembalian - $request->tunai_gaji;
        $karyawan->sisa_gaji = $sisa_gaji;

        $karyawan->save();

        Flash::success('Karyawan saved successfully 👍');

        return redirect(route('karyawans.index'));
    }

    /**
     * Display the specified Karyawan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $karyawan = $this->karyawanRepository->find($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }
        return view('karyawans.show')->with('karyawan', $karyawan);
    }

    /**
     * Show the form for editing the specified Karyawan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $karyawan = $this->karyawanRepository->find($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        return view('karyawans.edit')->with('karyawan', $karyawan);
    }

    /**
     * Update the specified Karyawan in storage.
     *
     * @param  int              $id
     * @param UpdateKaryawanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKaryawanRequest $request)
    {
        $karyawan = $this->karyawanRepository->find($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');
            return redirect(route('karyawans.index'));
        }

        // Update data karyawan
        $input = $request->all();
        $karyawan = $this->karyawanRepository->update($input, $id);

        // Set nilai standar gaji hasil dari relasi dengan model Gaji
        $standar_gaji = $karyawan->gaji->standar_gaji;
        $karyawan->standart = $standar_gaji;

        // Hitung ulang sisa gaji
        $sisa_gaji = $request->uang_transport + $request->uang_makan - $request->pengembalian - $request->tunai_gaji;
        $karyawan->sisa_gaji = $sisa_gaji;

        // Simpan perubahan
        $karyawan->save();

        Flash::success('Karyawan updated successfully 👍');
        return redirect(route('karyawans.index'));
    }


    /**
     * Remove the specified Karyawan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $karyawan = $this->karyawanRepository->find($id);

        if (empty($karyawan)) {
            Flash::error('Karyawan not found');

            return redirect(route('karyawans.index'));
        }

        // $this->karyawanRepository->delete($id);
        // Gunakan forceDelete untuk menghapus tanpa soft delete
        $karyawan->forceDelete();

        Flash::success('Karyawan deleted successfully 👍');

        return redirect(route('karyawans.index'));
    }
}
