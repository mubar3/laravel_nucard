<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Golongan; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Golongan::insert([[
        //     'atas' => '120',   
        //     'kiri' => '232',   
        //     'size' => '100',   
        //     'folder' => 'bu',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '134',   
        //     'kiri' => '232',   
        //     'size' => '86',   
        //     'folder' => 'des1',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '139',   
        //     'kiri' => '235',   
        //     'size' => '80',   
        //     'folder' => 'des2',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '131',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => 'des3',   
        //     'jumlah' => '200',   
        // ],[
        //     'atas' => '131',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => 'des4',   
        //     'jumlah' => '14 ',   
        // ],[
        //     'atas' => '130',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => 'du',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '115',   
        //     'kiri' => '216',   
        //     'size' => '119',   
        //     'folder' => 'fatayat',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '195',   
        //     'kiri' => '240',   
        //     'size' => '65',   
        //     'folder' => 'gp_ansor',   
        //     'jumlah' => '200',   
        // ],[
        //     'atas' => '130',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => 'pmii',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '138',   
        //     'kiri' => '231',   
        //     'size' => '87',   
        //     'folder' => 'tebuireng',   
        //     'jumlah' => '14',   
        // ]]);

        
        // Golongan::insert([[
        //     'atas' => '132',   
        //     'kiri' => '232',   
        //     'size' => '87',   
        //     'folder' => '1',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '132',   
        //     'kiri' => '232',   
        //     'size' => '87',   
        //     'folder' => '2',   
        //     'jumlah' => '200    ',   
        // ],[
        //     'atas' => '105',   
        //     'kiri' => '223',   
        //     'size' => '105',   
        //     'folder' => '3',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '135',   
        //     'kiri' => '237',   
        //     'size' => '80',   
        //     'folder' => '4',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '132',   
        //     'kiri' => '329',   
        //     'size' => '105',   
        //     'folder' => '5',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '105',   
        //     'kiri' => '225',   
        //     'size' => '100',   
        //     'folder' => '6',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '115',   
        //     'kiri' => '95',   
        //     'size' => '119',   
        //     'folder' => '7',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '129',   
        //     'kiri' => '230',   
        //     'size' => '90',   
        //     'folder' => '8',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '124',   
        //     'kiri' => '107',   
        //     'size' => '102',   
        //     'folder' => '9',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '199',   
        //     'kiri' => '240',   
        //     'size' => '85',   
        //     'folder' => '10',   
        //     'jumlah' => '200',   
        // ],[
        //     'atas' => '130',   
        //     'kiri' => '230',   
        //     'size' => '92',   
        //     'folder' => '11',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '140',   
        //     'kiri' => '232',   
        //     'size' => '85',   
        //     'folder' => '12',   
        //     'jumlah' => '12',   
        // ],[
        //     'atas' => '125',   
        //     'kiri' => '225',   
        //     'size' => '100',   
        //     'folder' => '13',   
        //     'jumlah' => '12',   
        // ],[
        //     'atas' => '115',   
        //     'kiri' => '217',   
        //     'size' => '118',   
        //     'folder' => '14',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '128',   
        //     'kiri' => '228',   
        //     'size' => '95',   
        //     'folder' => '15',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '127',   
        //     'kiri' => '228',   
        //     'size' => '96',   
        //     'folder' => '16',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '106',   
        //     'kiri' => '227',   
        //     'size' => '96',   
        //     'folder' => '17',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '116',   
        //     'kiri' => '227',   
        //     'size' => '96',   
        //     'folder' => '18',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '110',   
        //     'kiri' => '226',   
        //     'size' => '97',   
        //     'folder' => '19',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '117',   
        //     'kiri' => '227',   
        //     'size' => '95',   
        //     'folder' => '20',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '140',   
        //     'kiri' => '117',   
        //     'size' => '110',   
        //     'folder' => '21',   
        //     'jumlah' => '12',   
        // ],[
        //     'atas' => '120',   
        //     'kiri' => '60',   
        //     'size' => '120',   
        //     'folder' => '22',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '114',   
        //     'kiri' => '223',   
        //     'size' => '103',   
        //     'folder' => '23',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '128',   
        //     'kiri' => '328',   
        //     'size' => '104',   
        //     'folder' => '24',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '108',   
        //     'kiri' => '318',   
        //     'size' => '104',   
        //     'folder' => '25',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '124',   
        //     'kiri' => '343',   
        //     'size' => '104',   
        //     'folder' => '26',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '122',   
        //     'kiri' => '329',   
        //     'size' => '105',   
        //     'folder' => '27',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '131',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => '28',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '131',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => '29',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '131',   
        //     'kiri' => '231',   
        //     'size' => '89',   
        //     'folder' => '30',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '121',   
        //     'kiri' => '222',   
        //     'size' => '106',   
        //     'folder' => '31',   
        //     'jumlah' => '14',   
        // ],[
        //     'atas' => '129',   
        //     'kiri' => '330',   
        //     'size' => '110',   
        //     'folder' => '32',   
        //     'jumlah' => '200',   
        // ]]);

        Golongan::insert([[
            'atas' => '132',   
            'kiri' => '232',   
            'size' => '87',   
            'folder' => '2',   
            'jumlah' => '50',   
        ],[
            'atas' => '199',   
            'kiri' => '240',   
            'size' => '85',   
            'folder' => '10',   
            'jumlah' => '50',   
        ],[
            'atas' => '129',   
            'kiri' => '330',   
            'size' => '110',   
            'folder' => '32',   
            'jumlah' => '200',   
        ]]);
    }
}
