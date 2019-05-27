<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'loaixetnghiem'],function(){
        Route::get('danhsach','LoaiXetNghiemController@getdanhsach')->name('getdanhsach');
        Route::get('them','LoaiXetNghiemController@getthem')->name('getthem');
        Route::post('them','LoaiXetNghiemController@postthem')->name('postthem');
        Route::get('sua/{id}','LoaiXetNghiemController@getsua')->name('getsua');
        Route::post('sua/{id}','LoaiXetNghiemController@postsua')->name('postsua');
        Route::get('xoa/{id}','LoaiXetNghiemController@getxoa')->name('getxoa');
    });
    Route::group(['prefix'=>'phongbenh'],function(){
        Route::get('danhsach','PhongBenhController@getdanhsach')->name('getdanhsachpb');
        Route::get('them','PhongBenhController@getthem')->name('getthempb');
        Route::post('them','PhongBenhController@postthem')->name('postthempb');
        Route::get('sua/{id}','PhongBenhController@getsua')->name('getsuapb');
        Route::post('sua/{id}','PhongBenhController@postsua')->name('postsuapb');
        Route::get('xoa/{id}','PhongBenhController@getxoa')->name('getxoapb');
    });
    Route::group(['prefix'=>'giuongbenh'],function(){
        Route::get('danhsach','GiuongBenhController@getdanhsach')->name('getdanhsachgb');
        Route::get('them','GiuongBenhController@getthem')->name('getthemgb');
        Route::post('them','GiuongBenhController@postthem')->name('postthemgb');
        Route::get('sua/{id}','GiuongBenhController@getsua')->name('getsuagb');
        Route::post('sua/{id}','GiuongBenhController@postsua')->name('postsuagb');
        Route::get('xoa/{id}','GiuongBenhController@getxoa')->name('getxoagb');
    });
    Route::group(['prefix'=>'duocpham'],function(){
        Route::get('danhsach','DuocPhamController@getdanhsach')->name('getdanhsachdp');
        Route::get('them','DuocPhamController@getthem')->name('getthemdp');
        Route::post('them','DuocPhamController@postthem')->name('postthemdp');
        Route::get('sua/{id}','DuocPhamController@getsua')->name('getsuadp');
        Route::post('sua/{id}','DuocPhamController@postsua')->name('postsuadp');
        Route::get('xoa/{id}','DuocPhamController@getxoa')->name('getxoadp');
    });
    Route::group(['prefix'=>'benhnhan'],function(){
        Route::get('danhsach','BenhNhanController@getdanhsach')->name('getdanhsachbn');
        Route::get('them','BenhNhanController@getthem')->name('getthembn');
        Route::post('them','BenhNhanController@postthem')->name('postthembn');
        Route::get('sua/{id}','BenhNhanController@getsua')->name('getsuabn');
        Route::post('sua/{id}','BenhNhanController@postsua')->name('postsuabn');
        Route::get('xoa/{id}','BenhNhanController@getxoa')->name('getxoabn');
        Route::get('chitiet/{id}','BenhNhanController@getchitiet')->name('chitietbn');
    });
    Route::group(['prefix'=>'benhan'],function(){
        Route::get('danhsach','BenhAnController@getdanhsach')->name('getdanhsachba');
        Route::get('them','BenhAnController@getthem')->name('getthemba');
        Route::post('them','BenhAnController@postthem')->name('postthemba');
        Route::get('sua/{id}','BenhAnController@getsua')->name('getsuaba');
        Route::post('sua/{id}','BenhAnController@postsua')->name('postsuaba');
        Route::get('xoa/{id}','BenhAnController@getxoa')->name('getxoaba');
        Route::get('themphacdo/{id}','BenhAnController@getthemphacdo')->name('getthemphacdo');
        Route::post('themphacdo/{id}','BenhAnController@postthemphacdo')->name('postthemphacdo');
        Route::get('chitiet/{id}','BenhAnController@getchitiet')->name('chitiet');
    });
    Route::group(['prefix'=>'kq'],function(){
        Route::get('danhsach','KQYLController@getdanhsach')->name('getdanhsachttrv');
        Route::get('them','KQYLController@getthem')->name('getthemttrv');
        Route::post('them','KQYLController@postthem')->name('postthemttrv');
        Route::get('sua/{id}','KQYLController@getsua')->name('getsuattrv');
        Route::post('sua/{id}','KQYLController@postsua')->name('postsuattrv');
        Route::get('xoa/{id}','KQYLController@getxoa')->name('getxoattrv');
    });
    
    Route::group(['prefix'=>'pppt'],function(){
        Route::get('danhsach','PPPTController@getdanhsach')->name('getdanhsachpppt');
        Route::get('them','PPPTController@getthem')->name('getthempppt');
        Route::post('them','PPPTController@postthem')->name('postthempppt');
        Route::get('sua/{id}','PPPTController@getsua')->name('getsuapppt');
        Route::post('sua/{id}','PPPTController@postsua')->name('postsuapppt');
        Route::get('xoa/{id}','PPPTController@getxoa')->name('getxoapppt');
    });
    Route::group(['prefix'=>'phacdo'],function(){
        Route::get('danhsach','PhacDoController@getdanhsach')->name('getdanhsachpd');
        Route::get('them','PhacDoController@getthem')->name('getthempd');
        Route::post('them','PhacDoController@postthem')->name('postthempd');
        Route::get('sua/{id}','PhacDoController@getsua')->name('getsuapd');
        Route::post('sua/{id}','PhacDoController@postsua')->name('postsuapd');
        Route::get('xoa/{id}','PhacDoController@getxoa')->name('getxoapd');
        Route::get('vienphi/{id}','PhacDoController@vienphi')->name('vienphi');
    });

    Route::group(['prefix'=>'vienphi'],function(){
        Route::get('danhsach','VienPhiController@getdanhsach')->name('getdanhsachvp');
        Route::post('them','VienPhiController@postthem')->name('postthemvp');
        Route::get('xoa/{id}','VienPhiController@getxoa')->name('getxoavp');

    });

    Route::group(['prefix'=>'nhanvien'],function(){
        Route::get('danhsach','NhanVienController@getdanhsach')->name('getdanhsachnv');
        Route::get('them','NhanVienController@getthem')->name('getthemnv');
        Route::post('them','NhanVienController@postthem')->name('postthemnv');
        Route::get('sua/{id}','NhanVienController@getsua')->name('getsuanv');
        Route::post('sua/{id}','NhanVienController@postsua')->name('postsuanv');
        Route::get('xoa/{id}','NhanVienController@getxoa')->name('getxoanv');
    });

    Route::group(['prefix'=>'chucvu'],function(){
        Route::get('danhsach','ChucVuController@getdanhsach')->name('getdanhsachcv');
        Route::get('them','ChucVuController@getthem')->name('getthemcv');
        Route::post('them','ChucVuController@postthem')->name('postthemcv');
        Route::get('sua/{id}','ChucVuController@getsua')->name('getsuacv');
        Route::post('sua/{id}','ChucVuController@postsua')->name('postsuacv');
        Route::get('xoa/{id}','ChucVuController@getxoa')->name('getxoacv');
    });
    Route::group(['prefix'=>'ajax'],function(){
		Route::get('giuongbenh','AjaxController@getgiuongbenh')->name('giuongbenh');
	});
});
