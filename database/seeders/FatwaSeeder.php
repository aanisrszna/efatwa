<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use App\Models\Fatwa;

class FatwaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'tajuk' => 'FATWA MENGENAI PENGHARAMAN UPACARA PERBOMOHAN IBRAHIM BIN MAT ZIN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2023-12-05',
                'tarikh_diwartakan' => '2023-12-27',
                'keputusan' => 'Bahawa upacara dan amalan perbomohan yang dilakukan oleh Ibrahim Bin Mat Zin atau Raja Bomoh Ibrahim Mat Zin yang menggunakan objek-objek tertentu seperti Sangkar Burung Cenderawasih, Tebu Salak Hitam, Bubu, Teropong Buluh Kuning, Air Telaga Buta, Air Berlaga Simpang Tiga atau tanpa menggunakan apa-apa objek, sama ada untuk tujuan perubatan, perbomohan atau selainnya, adalah berlawanan dengan Hukum Syarak dan haram',
                'fail' => 'Fail/fatwa1.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'tajuk' => 'FATWA PENGHARAMAN PENGAJARAN TAREKAT',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2023-12-12',
                'tarikh_diwartakan' => '2023-12-21',
                'keputusan' => '"AHAWASANYA Jawatankuasa Fatwa, pada menjalankan kuasanya di bawah seksyen 36 dan seksyen 37 Enakmen Pentadbiran Agama Islam (Perak) 2004 [Enakmen Bil. 4 tahun 2004), telah menyediakan fatwa yang terkandung dalam ini: DAN BAHAWASANYA menurut seksyen 37 Enakmen yang sama, Duli Yang Maha Mulia Sultan Perak Darul Ridzuan telah memperkenankan penyiaran fatwa ini dalam Warta dan Kerajaan Negeri telah dimaklumkan tentang fatwa ini: MAKA, OLEH YANG DEMIKIAN, pada menjalankan kuasa yang diberikan oleh seksyen 37 Enakmen Pentadbiran Agama Islam (Perak) 2004, Jawatankuasa Fatwa yang bersidang kali ke-202 bertarikh 17-19 September 2014 bersamaan 22-24 Zulkaedah 1435, dengan perkenan Duli Yang Maha Mulia Sultan Perak Darul Ridzuan, membuat dan menyiarkan fatwa yang berikut: "Bahawa fahaman dan ajaran Tarekat Amirul Mukminin Abu Bakar As-Siddiq R.A. yang dibawa oleh Haji Ismail Bin Alang Muhamed adaiah mengandungi ajaran, pegangan dan fahaman yang bertentangan dengan hukum Syarak".',
                'fail' => 'Fail/fatwa 2.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'tajuk' => 'FATWA MENGENAI STATUS TAPAK WAKAF KHAS MASJID YANG TELAH TIDAK DIGUNAKAN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Wakaf',
                'tarikh_keputusan' => '2015-01-19',
                'tarikh_diwartakan' => '2015-02-12',
                'keputusan' => '"Boleh menggantikan tapak wakaf khas masjid yang tidak digunakan bagi tujuan pembinaan masjid kepada tapak yang lain dengan syarat mempunyai kesamaan atau lebih nilai tapak tersebut berdasarkan kaedah istibdal (gantian)"Tujuan pemindahan hendaklah berdasarkan kepada suai manfaat yang tidak bercanggah dengan Hukum Syarak dan Maslahah (kepentingan umum). Sebarang bentuk tujuan istibdal (gantian) hendaklah terlebih dahulu mendapat perakuan daripada Jawatankuasa Fatwa Negeri Perak".',
                'fail' => 'Fail/fatwa3.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'tajuk' => 'FATWA MENGENAL HUKUM PELANCONG BUKAN ISLAM MEMASUKI MASJID DAN RUANG SOLAT UTAMA DI DALAM MASJID',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Lain-Lain',
                'tarikh_keputusan' => '2014-09-24',
                'tarikh_diwartakan' => '2014-09-25',
                'keputusan' => '"Pelancong bukan Islam diharuskan memasuki masjid dan ruang solat dengan syarat mendapat keizinan pihak pengurusan masjid. Perlakuan serta tingkah laku mereka hendaklah tidak mencemarkan kesucian masjid, sentiasa terkawal dan beradab.Walau bagaimanapun, perbuatan berdoa atau bertafakur oleh pelancong bukan Islam di dalam masjid mengikut cara agama mereka dalam keadaan yang boleh menimbulkan fitnah adalah dilarang".',
                'fail' => 'Fail/fatwa 4.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'tajuk' => 'FATWA MENGENAI PENYALURAN HARTA TIDAK PATUH SYARIAH KE BAITULMAL',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Ibadah',
                'tarikh_keputusan' => '2014-09-24',
                'tarikh_diwartakan' => '2014-09-25',
                'keputusan' => '"Harta-harta atau sebarang pemerolehan yang diperolehi dengan cara yang tidak mematuhi syariah seperti riba, gharar, perjudian, penipuan, rompakan, rampasan. rasuah dan seumpamanya adalah Haram dan tidak boleh digunakan untuk manafaat dan kepentingan diri sendiri melainkan untuk kepentingan awam. Pembersihan harta-harta atau pemerolehan(i) diserah kepada Baitulmal untuk maslahah-maslahah umum umatIslam seperti membiayai pembinaan atau penyelenggaraan jambatan, jalan, tandas dan sebagainya;(ii) diserah kepada golongan fakir miskin; atau(iii) jika harta tersebut merupakan harta rompak, curi dan seumpamanya,maka harta tersebut perlu diserahkan semula kepada pemiliknya.Jika pemiliknya telah meninggal dunia atau tidak dapat dijumpai. maka harta tersebut mestilah dikembalikan kepada ahli warisnya.Sekiranya tidak dapat diketahui pemilik atau ahli waris pemilik. maka harta tersebut bendaklah discrahkan kepada Baitulmal"',
                'fail' => 'Fail/fatwa 5.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'tajuk' => 'FATWA MENGENAI LARANGAN PENGGUNAAN, PEMAKAIAN DAN PENGAMALAN TAWAJJUH KHATAMUN AL-NUBUWWAH',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2014-09-24',
                'tarikh_diwartakan' => '2014-09-25',
                'keputusan' => 'Oleh yang demikian, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa-(i) mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi penycbar tanda Khatamun Al-Nubuwwah ini berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian, dan sebagainya adalah disifatkan mengamalkan kepercayaan yang berlawanan dengan agidah Ahli Sunnah WalJamaah;(i) mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang cuba menyebarkan tanda KhatamunAl-Nubuwwah ini sama ada melalui apa-apa rangkaian, atau mana-mana pertubuhan atau persatuan adalah disifatkan mengamalkan pegangan yang bercanggah dengan agidah Ahli Sunnah WalJamaah;(iii)apa-apa variasi, versi, bentuk atau cabang bagi menyebarkan tandaKhatamun Al-Nubuwwah ini atau apa-apa tanda Khatamun Al-Nubuwwah adalah berlawanan dengan aqidah Ahli Sunnah WalJamaah; atau(iv)apa-apa jua bahan publisiti dan sebaran yang menonjolkan tandaKhatamun Al-Nubuwwah ini atau apa-apa tanda yang mempunyai persamaan dengannya dalam apa jua bentuk penerbitan dancetakan adalah dilarangApa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalangdan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 6.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'tajuk' => 'FATWA MENGENAI PENGHARAMAN AJARAN DAN FAHAMAN SYIAH DI NEGERI PERAK DARUL RIDZUAN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2012-01-04',
                'tarikh_diwartakan' => '2012-03-01',
                'keputusan' => 'Oleh yang demikian, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa;(i)Mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi pengikut ajaran dan fahaman ini adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jamaah;(ii) Mana-mana orang Islam sama ada secara individu atau berkumpulan melalui pertubuhan, persatuan atau syarikat yang menjadi ahli jamaah atau pengikut Syiah dengan berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian dan sebagainya yang mempunyai unsur-unsur persamaan dengan ajaran, pegangan dan fahaman Syiah, adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jammah;(iii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang cuba menyebarkan ajaran dan fahaman Syiah sama ada melalui apa-apa rangkaian, atau mana-mana pertubuhan atau persatuan yang mempunyai unsur-unsur persamaan dengan ajaran, pegangan dan fahaman Syiah adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jamaah;(iv) Apa-apa variasi, versi, bentuk atau cabang ajaran dan fahaman Syiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan unsur-unsur Syiah adalah berlawanan dengan agidah Ahli Sunnah Wal Jamaah; atau(v) Apa-apa jua bahan publisiti dan sebaran yang menonjolkan ajaran dan fahaman Syiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan unsur-unsur Syiah dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(vi) Apa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 8.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'tajuk' => 'FATWA MENGENAI PENCEGAHAN MENYEBARKAN ALIRAN DAN DAKYAH WAHABIAH DI NEGERI PERAK DARUL RIDZUAN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2012-01-04',
                'tarikh_diwartakan' => '2012-03-01',
                'keputusan' => 'Oleh yang demikian, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa;(i) Mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi penyebar Aliran dan Dakyah Wahabiah adalah disifatkan mengamalkan Aliran dan Dakyah Wahabiah yang berlawanan dengan aqidah Ahli Sunnah Wal Jamaah AliranAsyairah dan Maturidiyah;(ii) Mana-mana orang Islam sama ada secara individu atau berkumpulan melalui pertubuhan atau persatuan yang menjadiAhli Jamaah atau pengikut Aliran dan Dakyah Wahabiah dengan berselindung di sebalik apa-apa aktivit cronomi, perniagaan, pendidikan, kesenian, dan sebagainya yang mempunyai unsur-unsur persamaan dengan Aliran dan Dakyah Wahabiah, adalah disifatkan mengamalkan ajaran pegangan dan fahaman yang berlawanan dengan aqidah Ahli Sunnah Wal Jamaah AliranAsyairah dan Maturidiyah;(iii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang cuba menyebarkan Aliran dan Dakyah Wahabiah sama ada melalui apa-apa rangkaian, atau mana-mana pertubuhan atau persatuan yang mempunyai unsur-unsur persamaan dengun ajaran. pegangan dan fahaman Wahabiah adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidahAhli Sunnah Wal Jamaah AliranAsyairah dan Maturidiyah;(iv) apa-apa variasi, versi, bentuk atau cabang mana-mana Aliran danDakyah Wahabiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur Aliran dan Dakyah Wahabiah adalah berlawanan dengan agidah AhliSunnah Wal Jamaah Aliran Asyairah dan Maturidiyah: atau(v) apa-apa jua bahan publisiti dan sebaran yang menonjolkan aliran dan dakyah Wahabiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan unsur-unsur Aliran dan Dakyah Wahabiah dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(vi) Apa jua bentuk tindakan seperti yang dingatakan di alas perla dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 7.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'tajuk' => 'FATWA MENGENAI PENGHARAMAN AJARAN DAN FAHAMAN SYIAH DI NEGERI PERAK DARUL RIDZUAN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2012-01-04',
                'tarikh_diwartakan' => '2012-03-01',
                'keputusan' => 'Oleh yang demikian, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa;(i)Mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi pengikut ajaran dan fahaman ini adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jamaah;(ii) Mana-mana orang Islam sama ada secara individu atau berkumpulan melalui pertubuhan, persatuan atau syarikat yang menjadi ahli jamaah atau pengikut Syiah dengan berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian dan sebagainya yang mempunyai unsur-unsur persamaan dengan ajaran, pegangan dan fahaman Syiah, adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jammah;(iii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang cuba menyebarkan ajaran dan fahaman Syiah sama ada melalui apa-apa rangkaian, atau mana-mana pertubuhan atau persatuan yang mempunyai unsur-unsur persamaan dengan ajaran, pegangan dan fahaman Syiah adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jamaah;(iv) Apa-apa variasi, versi, bentuk atau cabang ajaran dan fahaman Syiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan unsur-unsur Syiah adalah berlawanan dengan agidah Ahli Sunnah Wal Jamaah; atau(v) Apa-apa jua bahan publisiti dan sebaran yang menonjolkan ajaran dan fahaman Syiah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan unsur-unsur Syiah dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(vi) Apa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 8.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'tajuk' => 'FATWA MENGENAI PERSEKUTUAN BIDAH AL-MADKHALIYYAH',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2018-07-10',
                'tarikh_diwartakan' => '2018-08-02',
                'keputusan' => 'Dengan ini, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa:Persekutuan Bid’ah Al-Madkhaliah yang mempunyai beberapa cabang dan pusat di sekitar Negeri Perak Darul Ridzuan adalah dinyatakan sebagai aliran dan fahaman yang tidak berasaskan ajaran Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah, dan bertentangan dengan hukum Islam.(i) Mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi ahli atau pengikut Persekutuan Bid’ah Al-Madkhaliah adalah disifatkan mengamalkan aliran dan fahaman yang bercanggah dengan ajaran Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah.(ii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang menjadi ahli atau pengikut Persekutuan Bid’ah Al-Madkhaliah dengan berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian dan sebagainya yang mempunyai unsur-unsur persamaan dengan ajaran dan fahaman Persekutuan Bid’ah Al-Madkhaliah adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang bercanggah dengan aqidah Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah.(iii) Apa-apa variasi, versi, bentuk atau cabang Persekutuan Bid’ah Al-Madkhaliah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur Persekutuan Bid’ah Al-Madkhaliah adalah berlawanan dengan agidah Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah; atau(iv) Apa-apa jua bahan publisiti dan sebaran yang menonjolkan Persekutuan Bid’ah Al-Madkhaliah atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur Persekutuan Bid’ah Al-Madkhaliah dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(v) Apa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 9.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'tajuk' => 'FATWA MENGENAI PENGHARAMAN WACANA AGAMA KESATRIAAN',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akidah',
                'tarikh_keputusan' => '2019-05-15',
                'tarikh_diwartakan' => '2019-06-01',
                'keputusan' => 'Oleh yang demikian, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa:Wacana Agama Kesatriaan yang berunsurkan kepercayaan kepada kuasa roh dan kekuatan magis serta mengamalkan kepercayaan yang tidak berasaskan ajaran Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah adalah dinyatakan sebagai aliran dan fahaman yang tidak bercanggah dengan aqidah Islam.(i) Mana-mana orang Islam sama ada secara individu atau berkumpulan yang menjadi penyebar atau penganut Wacana Agama Kesatriaan adalah disifatkan mengamalkan ajaran dan fahaman yang tidak berasaskan ajaran Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah.(ii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang menjadi penyebar atau penganut Wacana Agama Kesatriaan dengan berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian dan sebagainya yang mempunyai unsur-unsur persamaan dengan ajaran dan fahaman Wacana Agama Kesatriaan adalah disifatkan mengamalkan ajaran, pegangan dan fahaman yang tidak berasaskan aqidah Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah.(iii) Apa-apa variasi, versi, bentuk atau cabang Wacana Agama Kesatriaan atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur Wacana Agama Kesatriaan adalah berlawanan dengan agidah Ahli Sunnah Wal Jamaah Aliran Asya’irah dan Maturidiyah; atau(iv) Apa-apa jua bahan publisiti dan sebaran yang menonjolkan Wacana Agama Kesatriaan atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur Wacana Agama Kesatriaan dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(v) Apa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 10.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'tajuk' => 'FATWA MENGENAI PENYELEWENGAN NILAI-NILAI BUDAYA DAN ADAT ISTIADAT',
                'status_pewartakan' => 'Diwartakan',
                'kategori' => 'Akhlak',
                'tarikh_keputusan' => '2020-04-18',
                'tarikh_diwartakan' => '2020-05-01',
                'keputusan' => 'Dengan ini, Jawatankuasa Fatwa Negeri Perak mengambil keputusan bahawa:Penyelewengan Nilai-Nilai Budaya dan Adat Istiadat yang bertentangan dengan hukum Syarak dan membawa kepada amalan dosa dan maksiat adalah dinyatakan sebagai perbuatan yang tidak patut dan merosakkan.(i) Mana-mana orang Islam sama ada secara individu atau berkumpulan yang terlibat dalam penyelewengan nilai-nilai budaya dan adat istiadat yang bertentangan dengan hukum Syarak adalah disifatkan melakukan perbuatan yang tidak bermoral dan tidak beretika.(ii) Mana-mana orang Islam secara individu atau berkumpulan melalui pertubuhan atau persatuan yang terlibat dalam penyelewengan nilai-nilai budaya dan adat istiadat yang bertentangan dengan hukum Syarak dengan berselindung di sebalik apa-apa aktiviti ekonomi, perniagaan, pendidikan, kesenian dan sebagainya yang mempunyai unsur-unsur persamaan dengan penyelewengan nilai-nilai budaya dan adat istiadat adalah disifatkan melakukan perbuatan yang tidak bermoral dan tidak beretika.(iii) Apa-apa variasi, versi, bentuk atau cabang penyelewengan nilai-nilai budaya dan adat istiadat atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur penyelewengan nilai-nilai budaya dan adat istiadat adalah berlawanan dengan akhlak dan moral Islam; atau(iv) Apa-apa jua bahan publisiti dan sebaran yang menonjolkan penyelewengan nilai-nilai budaya dan adat istiadat atau apa-apa ajaran, pegangan atau fahaman baru yang mempunyai persamaan dengan undur-unsur penyelewengan nilai-nilai budaya dan adat istiadat dalam apa jua bentuk penerbitan dan cetakan adalah dilarang.(v) Apa jua bentuk tindakan seperti yang dinyatakan di atas perlu dihalang dan diambil tindakan menurut undang-undang',
                'fail' => 'Fail/fatwa 11.pdf',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
            

        ];

        // Insert data into the tblfatwas table
        foreach ($data as $item) {
            Fatwa::create($item);
        }
    }
}

