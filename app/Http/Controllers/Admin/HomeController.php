<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Paket;
use App\Models\Tipe;
use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;

class HomeController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $tables = User::with('role')->get();
        $count_tipe = Tipe::count();
        $count_destinasi = Destinasi::count();
        $count_user = User::count();
        $count_paket = Paket::count();
        $count_transaksi = Transaksi::count();
        return view('admin.home.index', compact([
            'tables', 'title',
            'count_destinasi', 'count_paket', 'count_user', 'count_tipe', 'count_transaksi'
        ]));
    }

    public function ubah_password(){
        $title = 'Ubah Password';
        return view('admin.home.ubah_password', compact([
            'title'
        ]));
    }

    public function update_password(Request $request){
        $request->validate([
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password|min:6'
        ]);
        
        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('/admin/ubah_password')->with('success', 'Password successfully changed');
    }

    public function ubah_profile(){
        $title = 'Ubah Profile';
        return view('admin.home.ubah_profile', compact([
            'title'
        ]));
    }

    public function update_profile(Request $request){
        // ddd($request->all());
        $request->validate([
            'name' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image_name = null;
        if(auth()->user()->foto && file_exists(storage_path('app/public/'. auth()->user()->foto))){
            Storage::delete(['public/', auth()->user()->foto]);
        }
        
        if($request->foto != null){
            $image_name = $request->file('foto')->store('profile', 'public');
        }

        $googleConfigFile = file_get_contents(env('GOOGLE_APPLICATION_CREDENTIALS'));
        $storage = new StorageClient([
            'keyFile' => json_decode($googleConfigFile, true)
        ]);

        $storageBucketName = config('googlecloud.storage_bucket');
        $bucket = $storage->bucket($storageBucketName);
        $fileSource = $image_name;
        $googleCloudStoragePath = $image_name;
        /* Upload a file to the bucket.
        Using Predefined ACLs to manage object permissions, you may
        upload a file and give read access to anyone with the URL.*/
        $bucket->upload($fileSource, [
        // 'predefinedAcl' => 'publicRead',
            'name' => $googleCloudStoragePath
        ]);

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'foto' => ($image_name == null) ? auth()->user()->foto : $image_name
            ]);
        
        return redirect()->to('/admin/ubah_profile')
                         ->with('success', 'Profile successfully changed at '. Carbon::now());
    }
}
