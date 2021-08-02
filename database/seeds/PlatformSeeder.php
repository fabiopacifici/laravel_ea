<?php

use Illuminate\Database\Seeder;
use App\Platform;
use Illuminate\Support\Str;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = [
            [
                'name'=> 'Nintendo 3DS',
                'logo'=> 'https://media.contentapi.ea.com/content/dam/eacom/images/2017/11/ea-grid-3up-library-nintendo-3ds.png.adapt.crop16x9.652w.png'
            ],
            [
                'name' => 'XBOX',
                'logo' => 'https://media.contentapi.ea.com/content/dam/eacom/images/2020/06/ea-grid-3up-library-xbox-series-x.png.adapt.crop16x9.652w.png'
            ],
            [
                'name' => 'PS5',
                'logo'=> 'https://media.contentapi.ea.com/content/dam/eacom/images/2020/06/ea-grid-3up-library-playstation-5.png.adapt.crop16x9.652w.png'
            ],
            [
               'name' => 'PC',
                'logo' => 'https://media.contentapi.ea.com/content/dam/eacom/images/2017/11/ea-grid-3up-library-pc.png.adapt.crop16x9.652w.png'
            ]
            ];

        foreach ($platforms as $platform) {
            $plat = new Platform();
            $plat->name = $platform['name'];
            $plat->slug = Str::slug($plat->name);
            $plat->logo = $platform['logo'];
            $plat->save();
        }

    }
}
