<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
    }
}
class userSeeder extends  Seeder{
    public  function run(){
       // DB::table('users')->insert([
        //    ['name'=> 'Ha', 'email'=>'ha@gmail.com', 'password'=> bcrypt('matkhau')],
         //   ['name'=> 'PHP', 'email'=>'hai@gmail.com', 'password'=> bcrypt('matkhau')],
          //  ['name'=> 'Laravel', 'email'=>'thuy@gmail.com', 'password'=> bcrypt('matkhau')]

          //  ]);
       $data = [
            [
             'Ten' => 'pencel',
              'MaLoai' => '1',
               'DonGia'=>'45000',
                'SoLuong'=>'45',
              'HinhAnh'=>'',
                'MieuTa' =>'xinh xinh'

           ],
       [
           'Ten' => 'sách',
           'MaLoai' => '1',
           'DonGia'=>'40000',
           'SoLuong'=>'40',
           'HinhAnh'=>'',
           'MieuTa' =>'gọn nhẹ',


       ],
       ];
       DB::table('sanpham')->insert($data);
    }
}
