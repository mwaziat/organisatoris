<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Users extends Controller
{
    public function administrator()
    {
        $data = [
            'webTitle' => 'My Organisasi',
            'title'     => 'Data Pengurus',
            'UserData' => DB::table('tb_anggota')
                ->join('tb_login', 'tb_login.login_id', '=', 'tb_anggota.login_id')
                ->join('tb_role', 'tb_role.role_id', '=', 'tb_login.role_id')
                ->where([['tb_role.role_id', '=', '2'], ['tb_login.status', '=', '1']])
                ->select('*')
                ->orderBy('anggota_id', 'DESC')
                ->get()
        ];
        return view('admin.users.administrator', $data);
    }

    public function adminCreate()
    {
        $data = [
            'webTitle' => 'My Organisasi',
            'title'     => 'Tambah Pengurus',
            'roleData' => DB::table('tb_role')->where('role_id', '2')->orWhere('role_id', '3')->select('*')->get()
        ];
        return view('admin.users.adminCreate', $data);
    }

    public function checkingAdmin(Request $request)
    {
        if ($request->ajax()) {
            if (isset($_GET['term'])) {
                $userData = DB::table('tb_anggota')
                    ->join('tb_login', 'tb_login.login_id', '=', 'tb_anggota.login_id')
                    ->where([['tb_login.status', '=', '1'], ['tb_login.role_id', '=', '3']])
                    ->where('nama_lengkap', 'LIKE', '%' . $_GET['term'] . '%')
                    ->paginate();
                $json_data = [];
                if (count($userData) < 1) {
                    $json_data[] = [
                        'label' => 'No data found',
                        'msg' => 'error'
                    ];
                } else {
                    foreach ($userData as $row) {
                        $json_data[] = [
                            'label' => $row->nama_lengkap,
                            'nickname' => $row->nama_panggilan,
                            'username' => $row->username,
                            'email' => $row->email,
                            'role_id' => $row->role_id,
                            'login_id' => $row->login_id
                        ];
                    }
                }
            } else {
                $json_data = [
                    'report' => 'error',
                    'msg' => 'No data in search'
                ];
            }
            return response()->json($json_data);
        } else {
            abort(404);
        }
    }

    public function adminEdit(Request $request, $id)
    {
        $admin = User::join('tb_anggota', 'tb_anggota.login_id', '=', 'tb_login.login_id')
            ->join('tb_role', 'tb_role.role_id', '=', 'tb_login.role_id')
            ->find($id);
        $data = [
            'webTitle' => 'My Organisasi',
            'title'     => 'Edit Pengurus',
            'userData' => $admin,
            'roleData' => DB::table('tb_role')->select('*')->get()
        ];
        return view('admin.users.adminEdit', $data);
    }

    public function adminPut(Request $request, $id = null)
    {
        $message = [
            'required' => ':attribute wajib diisi!'
        ];
        $request->validate([
            'fullName' => 'required',
            'role' => 'required',
        ], $message);

        $admin = User::find($id);
        $admin->role_id = $request->role;
        $admin->save();

        $request->session()->flash('success', 'Berhasil menambahkan pengurus!');
        return redirect('/admin/create');
    }
}
