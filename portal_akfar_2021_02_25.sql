/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : portal_akfar

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 25/02/2021 09:19:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for numbers
-- ----------------------------
DROP TABLE IF EXISTS `numbers`;
CREATE TABLE `numbers`  (
  `n` int(1) NOT NULL DEFAULT 0
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of numbers
-- ----------------------------
INSERT INTO `numbers` VALUES (1);
INSERT INTO `numbers` VALUES (2);
INSERT INTO `numbers` VALUES (3);
INSERT INTO `numbers` VALUES (4);
INSERT INTO `numbers` VALUES (5);

-- ----------------------------
-- Table structure for tb_banner
-- ----------------------------
DROP TABLE IF EXISTS `tb_banner`;
CREATE TABLE `tb_banner`  (
  `id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hyperlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_banner
-- ----------------------------
INSERT INTO `tb_banner` VALUES ('DSTV10', 'Unggul dan Berkarakter', '<p>Akademi Farmasi Surabaya dengan Motto Unggul dan Berkarakter</p>\r\n', 'DSTV10.jpg', 'NULL', '2020-08-11 05:15:58', '2020-08-11 06:18:11', NULL);
INSERT INTO `tb_banner` VALUES ('R1PMZ6', 'Ahli Virus Sebut Covid-19 Adalah Virus Umum', '<p style=\"text-align:right\">Pandemi&nbsp;Covid-19 masih menghantui warga dunia termasuk Indonesia.</p>\r\n', 'R1PMZ6.jpg', '1Z4Y9U', '2020-08-11 05:24:21', '2020-08-11 05:59:15', NULL);
INSERT INTO `tb_banner` VALUES ('VQW6XF', 'Penerimaan Mahasiswa Baru TA 2021 - 2022', '', 'VQW6XF.27', '', '2021-02-24 12:05:34', '2021-02-24 12:05:34', NULL);

-- ----------------------------
-- Table structure for tb_detil_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tb_detil_dosen`;
CREATE TABLE `tb_detil_dosen`  (
  `id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rel_nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tahun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tb_dosen`;
CREATE TABLE `tb_dosen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gelar_depan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gelar_belakang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hyperlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kontak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dosen
-- ----------------------------
INSERT INTO `tb_dosen` VALUES (1, '0721048802', 'Prasetyo Handrianto', '', 'S.Si., M.Si.', 'prasetyo-handrianto', NULL, '0721048802-prasetyo-handrianto.JPG', '2020-09-07 15:00:40');
INSERT INTO `tb_dosen` VALUES (2, '9907147785', 'M. A. Hanny Ferry Fernanda', '', 'M.Farm, Apt', 'm-a-hanny-ferry-fernanda', NULL, '9907147785-m-a-hanny-ferry-fernanda.JPG', '2020-09-07 15:04:14');
INSERT INTO `tb_dosen` VALUES (3, '0703038304', 'Damaranie Dipahayu', '', 'S.Farm., M.Farm., Apt', 'damaranie-dipahayu', NULL, '0703038304-damaranie-dipahayu.JPG', '2020-09-07 15:06:28');

-- ----------------------------
-- Table structure for tb_event
-- ----------------------------
DROP TABLE IF EXISTS `tb_event`;
CREATE TABLE `tb_event`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hyperlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `event_start` date NULL DEFAULT NULL,
  `event_end` date NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `update_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_event
-- ----------------------------
INSERT INTO `tb_event` VALUES (1, '6TWKO2', 'pendaftaran_yudisium_2019_2020', 'Pendaftaran Yudisium 2019 2020', '<p align=\"justify\">Pendaftaran Yudisum Tahun Ajaran 2019 2020 telah dibuka. Mahasiswa yang telah memenuhi harap melakukan pendaftaran Yudisium melalui <a href=\"http://damas.akfarsurabaya.ac.id\">damas.akfarsurabaya.ac.id</a> untuk mendapatkan bukti pendaftaran Yudisium.</p>', 'prodi', NULL, '2020-07-20', '2020-08-15', NULL, NULL);
INSERT INTO `tb_event` VALUES (2, 'YBQKC8', 'tes-toefl', 'Tes TOEFL', '<p style=\"text-align:justify\">Uji Bahasa Inggris Sebagai Bahasa Asing, disingkat TOEFL adalah ujian kemampuan berbahasa Inggris yang diperlukan untuk mendaftar masuk ke universitas di Amerika Serikat atau negara-negara lain di dunia. Ujian ini sangat diperlukan bagi pendaftar atau pembicara yang bahasa ibunya bukan bahasa Inggris</p>\r\n', 'admin', 'YBQKC8-tes-toefl.png', '2020-08-03', '2020-08-31', '2020-08-05 13:10:01', '2020-08-05 13:10:01');
INSERT INTO `tb_event` VALUES (3, 'M3Y0AR', 'penerimaan-mahasiswa-gel-1-baru-ta-2021--2022', 'Penerimaan Mahasiswa Gel 1 Baru TA 2021 - 2022', '<p>Penerimaan Mahasiswa Gel 1 Baru TA 2021 - 2022</p>\r\n', 'admin', 'M3Y0AR-penerimaan-mahasiswa-gel-1-baru-ta-2021--2022.27', '2021-02-24', '2021-06-19', '2021-02-24 12:10:46', '2021-02-24 12:10:46');

-- ----------------------------
-- Table structure for tb_faq
-- ----------------------------
DROP TABLE IF EXISTS `tb_faq`;
CREATE TABLE `tb_faq`  (
  `id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_faq
-- ----------------------------
INSERT INTO `tb_faq` VALUES ('3LF4ZK', 'Bagaimana dengan Alumni dan Proyeksi Karir?', '<p>Alumni Akademi Farmasi Surabaya,&nbsp;tersebar diseluruh fasilitas Kesehatan baik milik pemerintah maupun swasta. Waktu tunggu lulusan untuk dapat bekerja sangat cepat,&nbsp;bahkan sudah diterima kerja sebelum Wisuda.</p>\r\n', '2021-02-24 11:09:09', '2021-02-24 11:09:09', NULL);
INSERT INTO `tb_faq` VALUES ('B8WO6H', 'Bagaimana akreditasinya?', '<p>Institusi dan Program Studi di <strong>Akademi Farmasi Surabaya,</strong> sudah terakreditasi B oleh BAN-PT dan LAMPT-Kes.</p>\r\n', '2021-02-24 11:02:40', '2021-02-24 11:02:40', NULL);
INSERT INTO `tb_faq` VALUES ('LT60ZW', 'Bagaimana dengan Dosen Pengajarnya?', '<p>Dosen Pengajar di Akademi Farmasi, adalah yang <strong>Unggul</strong> dari <strong>Kampus Ternama.</strong>&nbsp;Baik dalam Negeri maupun Luar Negeri.</p>\r\n', '2021-02-24 11:05:09', '2021-02-24 11:05:09', NULL);
INSERT INTO `tb_faq` VALUES ('O47NDW', 'Bagaimana dengan Sarana dan Suasana Kampus?', '<p>Memiliki Sarana dan Prasarana dan suasana kampus yang sangat menunjang dan mendukung aktivitas pembelajaran dan kegiatan kemahasiswaan.</p>\r\n', '2021-02-24 11:06:43', '2021-02-24 11:47:31', NULL);
INSERT INTO `tb_faq` VALUES ('U97IO6', 'Bagaimana dengan Biayanya?', '<p>Biaya Kuliah yang terjangkau, serta akses ke Kampus juga sangat mudah.</p>\r\n', '2021-02-24 11:10:19', '2021-02-24 12:51:05', NULL);

-- ----------------------------
-- Table structure for tb_news
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news`  (
  `id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hyperlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `posted` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO `tb_news` VALUES ('0R6ZBM', 'lorem-ipsum-dolor-sit-amet', 'Lorem ipsum dolor sit amet', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sit nobis magni incidunt eos quasi et excepturi, animi omnis velit, deserunt ratione eum dolorem ducimus ab quidem saepe, natus earum facilis voluptate molestias quos nisi. Beatae in saepe velit nisi sapiente ullam nihil. Laboriosam repellat deleniti voluptate maiores consectetur debitis</p>\r\n', '0R6ZBM-lorem-ipsum-dolor-sit-amet.PNG', 'redaksi', 'blog', '', '2020-08-05', '2020-08-05 17:07:20', '2020-08-05 17:10:40');
INSERT INTO `tb_news` VALUES ('1Z4Y9U', 'ahli-virus-sebut-covid19-adalah-virus-umum', 'Ahli Virus Sebut Covid-19 Adalah Virus Umum', '<p style=\"text-align:justify\"><strong>Suara.com -&nbsp;</strong>Pandemi virus corona penyebab sakit&nbsp;<a href=\"https://www.suara.com/tag/covid-19\">Covid-19</a>&nbsp;masih menghantui warga dunia termasuk Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">Menurut ahli virus atau virologis Richard Sutejo, virus corona penyebab sakit Covid-19 merupakan tipe virus yang umum menyerang saluran pernafasan. Tetapi strain covid-19 memiliki morbiditas dan mortalitas yang lebih tinggi akibat adanya mutasi genetik dan kemungkinan transmisi inter-spesies.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Virus ini, seperti halnya pendahulunya, MERS dan SARS, mematikan karena menyerang paru-paru dan menimbulkan Acute Respiratory Distress Syndrome yang membahayakan nyawa penderita sehingga memerlukan ventilator untuk bertahan hidup,&quot;&nbsp; kata Richard yang juga Head of Master in Bio Management i3L dalam keterangan resmi yang diterima Suara.com.</p>\r\n\r\n<p style=\"text-align:justify\">Richard menambahkan selain menerapkan Pembatasan Sosial Skala Besar (PSSB), salah satu cara efektif untuk menekan penyebaran Covid-19 adalah dengan melakukan tes massal.</p>\r\n\r\n<p style=\"text-align:justify\">Dengan adanya tes massal, kata Richard, pemerintah dapat memetakan pola penyebaran Covid-19 sehingga perencanaan dan antisipasi yang dilakukan dapat lebih tepat dan terarah.</p>\r\n\r\n<p style=\"text-align:justify\">Indonesia International Institute for Life Science atau i3L sendiri merupakan institusi pendidikan yang ikut urun rembuk membantu memerangi virus corona penyebab sakit Covid-19.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Rencananya i3l akan bekerjasama dengan PT&nbsp;<a href=\"https://www.suara.com/tag/kalbe\">Kalbe</a>&nbsp;Farma Tbk (Kalbe) untuk membantu melakukan PCR test, memproduksi rapid test dan memberikan ide serta penelitian dari berbagai disiplin ilmu life sciences,&quot; kata Richard.</p>\r\n\r\n<p style=\"text-align:justify\">Selain itu, i3L juga akan berkolaborasi dengan Kalbe untuk melakukan pemeriksaan Covid-19 di KALGen Innolab. Saat ini, sedang dilakukan persiapan Laboratorium Jejaring Kalbe dan juga jadwal pemeriksaan Test Covid-19.</p>\r\n\r\n<p style=\"text-align:justify\">Sebelumnya, i3L telah berpartisipasi dengan gerakan Indonesia Pasti Bisa. I3L serta beberapa lembaga lainnya turut serta bergabung berpartisipasi dengan Task Force Riset dan Inovasi Teknologi untuk Penanganan COVID-19 yang dibentuk Badan Pengkajian dan Penerapan Teknologi (BPPT).</p>\r\n\r\n<p style=\"text-align:justify\">Penanganan ini bertujuan untuk membangun basis data genomic untuk penelitian perawatan dan vaksin COVID-19 di Indonesia. Serta melakukan pengembangan dan produksi massal test kit Covid-19 untuk populasi Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Dengan kontribusi ini kami harap i3L dapat membantu pemerintah dan masyarakat Indonesia melawan pandemi Covid-19,&quot; pungkasnya.</p>\r\n', '1Z4Y9U-ahli-virus-sebut-covid19-adalah-virus-umum.jpg', 'redaksi', 'blog', 'covid19,pandemi,kesehatan', '2020-07-31', '2020-07-31 12:51:37', '2020-07-31 13:21:42');
INSERT INTO `tb_news` VALUES ('4XDVNO', 'membedah-kandungan-capsaicin-dalam-cabe', 'Membedah Kandungan Capsaicin dalam Cabe', '<p style=\"text-align:justify\">Cabe (<em>Capsicum annum Linn</em>) adalah tanaman perkebunan dan sebagai obat tradisional. Produksinya digunakan di dalam negeri dan diekspor dalam produk kering. Cabe digunakan sebagai stimulan, karminatif, tonik, juga untuk mengobati asma, impotensi, gejala demam, pilek, influenza, kolera, antelmintik, antiflatulen, ekspektoran, antitusif, antijamur, dan obat kolesterol. Cabe memiliki senyawa alami yang dapat memberikan manfaat bagi manusia. Salah satu senyawa terpenting dalam Cabe adalah capsaicin yang merupakan metabolit sekunder. Dalam penelitian lain, senyawa kimia yang terkait dengan metabolit sekunder yaitu alkaloid, terpenoid, steroid, dan saponin. Cabe memiliki rasa pedas dan bau khas yang dimediasi oleh senyawa capsaicinoid. Capsaicinoids termasuk ordihydrocapsaicin, capsaicin, dihydrocapsaicin, norcapsaicin, homodihydrocapsaicin, homocapsaicin, dan nonivamide. Dalam penelitian terbaru, metode&nbsp;<em>Thin Layer Chromatography</em>&nbsp;(TLC) dilakukan untuk memurnikan senyawa capsaicin dalam cabe. Kromatografi jenis ini untuk memisahkan adsorpsi pada lapisan tipis adsorben.</p>\r\n\r\n<p style=\"text-align:justify\">Penelitian ini menganalisis capsaicin secara kuantitatif dengan TLC spectrophotodensitometer. TLC adalah metode pemisahan zat dengan melacaknya melalui fase diam di pelat media. Zat dapat dipisahkan dengan teknik TLC berdasarkan perbedaan afinitas masing-masing komponen antara fase aktif dan stasioner. Jumlah penyerapan zat yang telah dipisahkan dapat diukur dengan spektrofotodensitometer. Isi sampel dapat ditentukan dari rasio antara penyerapan sampel dan bahan bakunya. Dalam penelitian ini, hasil kadar capsaicin dalam bubuk adalah 0,36% dan ekstrak etanol adalah 1,84%.</p>\r\n\r\n<p style=\"text-align:justify\">Dalam penelitian ini, menunjukkan bahwa standar capsaicin 1020 &mu;g/ml. Area capsaicin dalam ekstrak etanol (3816,9) lebih tinggi daripada dalam bentuk bubuk (2422,7). Ekstraksi adalah metode untuk memperoleh senyawa aktif dari bahan alami menggunakan pelarut yang sesuai. Bahan-bahan alami perlu diekstraksi untuk mendapatkan beberapa atau semua bahan aktif yang digunakan untuk mensintesis dosis yang tepat, mudah disimpan, dan dirawat untuk waktu yang lama. Bahan yang diekstraksi bisa dalam bentuk bahan segar atau bubuk. Cabe berasal dari daerah tropis dan subtropis Amerika, terutama Kolombia, Amerika Selatan, dan terus menyebar ke Amerika Latin, Eropa dan Asia, termasuk Indonesia. Cabe mengandung capsaicin, dihydrocapsaicin, vitamin A, vitamin C, capsanthin, karoten, capsorubin, zeaxanthin, dan pewarna cryptoxanthin. Mineral mikro, seperti zat besi, kalium, kalsium, fosfor, dan niasin juga terkandung dalam cabe. Bahan aktif capsaicin berkhasiat sebagai stimulan sekresi asam lambung dan mencegah infeksi pada sistem pencernaan.</p>\r\n\r\n<p style=\"text-align:justify\">Unsur lain dalam Cabe adalah capsicol yang memiliki sifat analgesik, mengurangi asma, dan gatal-gatal. Capsaicin (<em>8-methyl-N-vanilyl-6-nonenamide</em>) adalah komponen aktif cabe. Capsaicin dapat mengiritasi dan menyebabkan sensasi terbakar pada jaringan ketika terjadi kontak. Di bidang farmasi, capsaicin juga dikenal memiliki aktivitas antikanker, diabetes, anti-arthritis dan analgesik selain memiliki nilai komersial dalam industri makanan. Pelarut etanol digunakan karena capsaicin dapat larut dalam pelarut polar dan memiliki varietas polar. Capsaicin adalah alkaloid yang memiliki kelarutan tinggi dalam alkohol tetapi rendah di dalam air. Capsaicin dianggap sebagai minyak dengan sifat lipofilik dan juga larut dalam lemak.</p>\r\n\r\n<p style=\"text-align:justify\">Capsaicin memiliki titik leleh pada 62-65&ordm;C dan titik didih 210-220&ordm;C. Capsaicin tidak berbau, tidak berwarna, dan termasuk dalam kelompok yang larut dalam minyak, lemak, metanol, etil asetat, dan etil alkali. Kadar capsaicin dipengaruhi oleh tingkat kematangan cabai. Selama proses pematangan cabai, kadar capsaicin meningkat hingga periode sintesis. Dalam penelitian ini, kadar capsaicin lebih banyak dalam ekstrak etanol daripada dalam bentuk bubuk. Dalam bubuk cabai, masih banyak senyawa dan residu lain yang bisa mengurangi kadar capsaicin. Sementara itu dalam ekstrak etanol diperoleh kadar yang tinggi karena telah dipisahkan dan tidak ada residu dari senyawa lain.</p>\r\n\r\n<p style=\"text-align:justify\">Penulis: Mohammad Sukma Nadi, drh., M.Kes., Faisal Fikri, drh., M.Vet. dan Muhammad Thohawi Elziyad Purnama, drh., M.Si.</p>\r\n\r\n<p style=\"text-align:justify\">Link terkait tulisan di atas:&nbsp;<a href=\"http://www.sysrevpharm.org/fulltext/196-1592995152.pdf?1595373762\">http://www.sysrevpharm.org/fulltext/196-1592995152.pdf?1595373762</a></p>\r\n', '4XDVNO-membedah-kandungan-capsaicin-dalam-cabe.jpg', 'redaksi', 'blog', 'cabe,khasiat', '2020-07-22', '2020-07-22 17:08:46', '2020-08-05 16:27:00');
INSERT INTO `tb_news` VALUES ('IL9R16', 'latihan-tiga-bulan-peserta-tari-yosakoi-dari-akfar-tampil-di-cross-culture-festival', 'Latihan Tiga Bulan. Peserta Tari Yosakoi dari Akfar Tampil di Cross Culture Festival', '<p><strong>TRIBUNJATIM.COM, SURABAYA</strong>&nbsp;- Mahasiswa Akademi Farmasi Surabaya turut serta dalam Festival Tari Remo dan Yosakoi di Cross Culture Festival, Minggu (9/7/2017). Baru pertama kali mengikuti Festival Tari, mahasiswa yang tergabung dalam Unit Kegiatan Mahasiswa Tari (Ukemari) tersebut mengaku deg-degan. Seperti dikatakan Apriliani Nur Hasanah Budiarti, satu peserta dari grup tersebut mengatakan sangat gugup. &quot;Kami semua baru pertama ikut festival, deg-degan dari tadi. Semoga lancar saja,&quot; ucap Aprilia.</p>\r\n\r\n<p>Sebagian dari 15 anggota dalam Tim Ukemari tidak memiliki pengalaman tari. Sedangkan sebagian lagi, termasuk Aprilia, biasa menarikan&nbsp;<em>modern dance</em>. Baru pertama mempelajari Yosakoi, mereka mengaku sangat menyita energi. Untuk mengikuti festival, para mahasiswa di semester 3 dan 5 tersebut, berlatih selama tiga bulan. Kesulitan menari Yosakoi menurut April adalah menyesuaikan gerakan sambil memainkan alat musik&nbsp;<em>naruko</em>. &quot;Susahnya ya menghafal gerakan, juga mainkan&nbsp;<em>naruko</em>&nbsp;itu kan sambil gerak,&quot; kata April.</p>\r\n\r\n<p>Meski mengaku masih kesulitan, Aprilia dan ke-15 anggota timnya berusaha menampilkan penampilan terbaik mereka. (sumber :&nbsp;<a href=\"http://jatim.tribunnews.com/2017/07/09/latihan-tiga-bulan-peserta-tari-yosakoi-tetap-deg-degan-tampil-di-cross-culture-festival\">Tribunjatim</a>)</p>\r\n', 'IL9R16-latihan-tiga-bulan-peserta-tari-yosakoi-dari-akfar-tampil-di-cross-culture-festival.jpg', 'redaksi', 'news', 'prestasi,lomba,ukm', '2017-07-09', '2017-07-09 17:02:21', '2020-08-05 16:50:45');
INSERT INTO `tb_news` VALUES ('ML32AP', '60-wisudawan-wisudawati-siap-kerja-dari-akademi-farmasi-surabaya', '60 Wisudawan Wisudawati Siap Kerja dari Akademi Farmasi Surabaya', '<p align=\"justify\"><strong>SURABAYA, SINAR POS</strong>&nbsp;&ndash; Akademi Farmasi Surabaya mewisuda sebanyak 60 mahasiswanya, setingkat Diploma tiga. Di Dyandra Convension Center Surabaya Sabtu (21/10/17). Sejak berdirinya pada tahun 2010, sudah mempunyai Mahasiswa sebanyak 1052 dan hari Sabtu di wisuda sebanyak 60 Mahasiswanya. Sekarang sudah mengacu ke good Governance.</p>', NULL, 'redaksi', 'news', 'wisuda,prestasi', '2017-10-21', '2017-10-21 17:10:52', '2017-10-21 17:10:52');

-- ----------------------------
-- Table structure for tb_pages
-- ----------------------------
DROP TABLE IF EXISTS `tb_pages`;
CREATE TABLE `tb_pages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hyperlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `update_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pages
-- ----------------------------
INSERT INTO `tb_pages` VALUES (1, 'ZK0GUB', 'sejarah-akfar', 'Sejarah Akfar', '<p style=\"text-align:justify\">Akademi Farmasi Surabaya atau yang lebih dikenal dengan&nbsp;<strong>AKFAR Surabaya,</strong>&nbsp;adalah intitusi pendidikan tinggi Diploma-III Farmasi pertama dan satu-satunya di Surabaya dibawah Yayasan Kepharmasian Surabaya. Akademi Farmasi Surabaya resmi didirikan 31 Desember 2010 merupakan institusi pendidikan tinggi dibawah binaan Departemen Kesehatan RI dan Departemen Pendidikan Tinggi RI. Kemudian beralih ijin alih bina ke Kementrian Pendidikan Nasional, tepatnya DIRJEN DIKTI tahun 2012 pada bulan Maret.</p>\r\n\r\n<p style=\"text-align:justify\">Pada Bulan September ditahun&nbsp;2014 Akademi Farmasi Surabaya Terakreditasi BAN-PT. Akademi Farmasi Surabaya dalam proses belajar mengajar mempunyai tujuan untuk mencetak mahasiswa yang terampil, jujur, disiplin dan berkompeten dibidang Farmasi.&nbsp;</p>\r\n', 'ZK0GUB-sejarah-akfar.jpg', 'about', NULL, '2020-07-29 04:58:07');
INSERT INTO `tb_pages` VALUES (2, '1TCZR8', 'sambutan-direktur', 'Sambutan Direktur', '<p style=\"text-align:justify\">Selamat datang di Kampus Biru Akademi Farmasi Surabaya. Kampus terkemuka yang sangat eksotik, dibangun di atas lahan sesuai topografi lingkungan kampus berbasis pendidikan, serta dikelilingi perumahan mewah ternama dan asri di kawasan surabaya dan pepohonan yang alami. Hijau, indah, teduh dan nyaman untuk belajar.</p>\r\n\r\n<p style=\"text-align:justify\">Program Diploma Akademi Farmasi Surabaya pada Tahun Ajaran 2016/2017 menerima angkatan yang ke VI Perjalanan waktu sembilan tahun sejak restrukturisasi Program Diploma telah banyak memberikan bekal dan pengalaman bagi pengelola untuk terus menyempurnakan dan memperbaiki sistem, baik sistem pendidikan maupun sistem manajemen.</p>\r\n\r\n<p style=\"text-align:justify\">Pendidikan vokasi menganut sistem terbuka (<em>multi-entry-exit system</em>) dan multimakna (berorientasi pada pembudayaan, pemberdayaan, pembentukan watak, dan kepribadian, serta berbagai kecakapan hidup life skill. Pendidikan vokasi berorientasi pada kecakapan kerja sesuai dengan perkembangan ilmu pengetahuan dan teknologi terapan serta sesuai dengan tuntutan kebutuhan lapangan kerja. Pendidikan vokasi merupakan pendidikan keahlian terapan yang diselenggarakan di perguruan tinggi berbentuk akademi, politeknik, sekolah tinggi, institut dan universitas. Bentuk penyelenggaraan pendidikan vokasi terdiri dari Program Diploma 1, Diploma 2, Diploma 3, dan Diploma 4. Standar nasional pendidikan vokasi dikembangkan berdasarkan standar kompetensi nasional dan/atau internasional., sehingga seluruh Program Keahlian dan unit yang ada harus selalu melakukan perbaikan terus menerus (<em>continuous improvement</em>)<br />\r\nBerdasarkan hasil perbaikan yang terus menerus tersebut, maka sejak Tahun Ajaran 2016/2017, seluruh Program Keahlian telah menggunakan kurikulum baru. Kurikulum tersebut merupakan hasil lokakarya pengembangan kurikulum yang diselenggarakan pada Tahun Ajaran 2015/2016. Lokakarya melibatkan pihak perusahaan swasta dan lembaga pemerintah selaku pengguna (user) lulusan program diploma Farmasi, alumni dan mahasiswa.</p>\r\n\r\n<p style=\"text-align:justify\">Sebagaimana yang diamanatkan Undang-Undang Nomor 20 Tahun 2003 tersebut memberikan wawasan dan keyakinan pendidikan tinggi harus dikembangkan ke arah suatu sistem demi kepentingan nasional, dan hal ini mendorong Ditjen Dikti Depdiknas merumuskan serangkaian kebijakan pengembangan pendidikan tinggi.<br />\r\nPimpinan Program Diploma menyampaikan ucapan terima kasih dan penghargaan yang setinggi-tingginya kepada semua pihak yang telah membantu bersama membangun Program Diploma Khususnya kefarmasian sehingga menjadi besar sampai saat ini.</p>\r\n\r\n<p style=\"text-align:right\">Direktur&nbsp;<br />\r\nAkademi Farmasi Surabaya,</p>\r\n\r\n<p style=\"text-align:right\"><strong>Abd. Syakur, S.Pd., M.Pd&nbsp;<br />\r\nNIDN. 0704108405</strong></p>\r\n', '1TCZR8-sambutan-direktur.jpg', 'about', NULL, '2020-07-29 04:58:33');
INSERT INTO `tb_pages` VALUES (4, 'K1FE4L', 'pimpinan-akademi-farmasi-surabaya', 'Pimpinan Akademi Farmasi Surabaya', '<p style=\"text-align:justify\"><strong>Daftar Nama Pimpinan Akademi Farmasi Surabaya</strong></p>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><strong>No</strong></td>\r\n			<td style=\"text-align:center\"><strong>Nama</strong></td>\r\n			<td style=\"text-align:center\"><strong>Jabatan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:right\">1.</td>\r\n			<td>Dr. Abd Syakur, M.Pd</td>\r\n			<td style=\"text-align:center\">Direktur</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:right\">2.</td>\r\n			<td>Tri Puji Lestari Sudarwati, S.Si., M.Si</td>\r\n			<td style=\"text-align:center\">Wakil Direktur I Bidang Akademik</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:right\">3.</td>\r\n			<td>Prasetyo Handrianto, S.Si., M.Si</td>\r\n			<td style=\"text-align:center\">Wakil Direktur II Bidang Kemahasiswaan</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n', 'K1FE4L-pimpinan-akademi-farmasi-surabaya.png', 'about', '2020-07-28 22:08:17', '2020-08-19 18:40:25');
INSERT INTO `tb_pages` VALUES (5, 'J567SB', 'laboratorium-teknologi-farmasi', 'Laboratorium Teknologi Farmasi', '<p style=\"text-align:justify\">Laboratorium Teknologi Farmasi di Akademi Farmasi Surabaya dilengkapi dengan alat - alat modern seperti :</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p style=\"text-align:justify\">1. Oven Memert</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">2. Friability Tester (TFT-1D)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">3. Ultra Turax (IKA T18 Basic)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">4. Sieve Shaker (SS-200)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">5. Water Bath (Nuve Bath 10)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">6. Heater (Krischef dan Akebono)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">7. pH Meter (Laqua)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">8. Blender Serbuk (Klazz)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">9. Hot Plate Stirer (Scilogex)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">10. Hot Plate (Maspion)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">11. Timbangan Digital (Acis AD-300i, Scout Ohauss, Scout Pro)</p>\r\n	</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">12. Hand Blander (Philips)</p>\r\n	</li>\r\n</ol>\r\n', 'J567SB-laboratorium-teknologi-farmasi.jpg', 'facility', '2020-07-29 04:39:19', '2020-07-29 05:56:27');
INSERT INTO `tb_pages` VALUES (6, 'UHBS6V', 'persaudaraan-setia-hati-teratai-akfar-surabaya', 'Persaudaraan Setia Hati Teratai AKFAR Surabaya', '<p style=\"text-align:justify\"><strong>Persaudaraan Setia Hati Terate</strong>&nbsp;(dikenal luas sebagai&nbsp;<strong>PSHT</strong>&nbsp;atau&nbsp;<strong>SH Terate</strong>) adalah organisasi olahraga yang diinisiasi oleh&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ki_Hadjar_Hardjo_Oetomo\" title=\"Ki Hadjar Hardjo Oetomo\">Ki Hadjar Hardjo Oetomo</a>&nbsp;pada tahun 1922 dan kemudian disepakati namanya menjadi Persaudaraan Setia Hati Terate pada kongres pertamanya di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madiun\" title=\"Madiun\">Madiun</a>&nbsp;pada tahun&nbsp;<a href=\"https://id.wikipedia.org/wiki/1948\" title=\"1948\">1948</a>.</p>\r\n\r\n<p style=\"text-align:justify\">PSHT merupakan organisasi pencak silat yang tergabung dan salah satu yang turut mendirikan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ikatan_Pencak_Silat_Indonesia\" title=\"Ikatan Pencak Silat Indonesia\">Ikatan Pencak Silat Indonesia</a>&nbsp;(IPSI) pada tanggal 18 Mei 1948.<sup><a href=\"https://id.wikipedia.org/wiki/Persaudaraan_Setia_Hati_Terate#cite_note-ipsi-1\">[1]</a></sup><sup><a href=\"https://id.wikipedia.org/wiki/Persaudaraan_Setia_Hati_Terate#cite_note-2\">[2]</a></sup>&nbsp;Saat ini PSHT diikuti sekitar 7 juta anggota, memiliki cabang di 236&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kabupaten\" title=\"Kabupaten\">kabupaten</a>/<a href=\"https://id.wikipedia.org/wiki/Kota_(Indonesia)\" title=\"Kota (Indonesia)\">kota</a>&nbsp;di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Indonesia\" title=\"Indonesia\">Indonesia</a>, 10 komisariat di perguruan tinggi dan 10 komisariat luar negeri di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Malaysia\" title=\"Malaysia\">Malaysia</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Belanda\" title=\"Belanda\">Belanda</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Rusia\" title=\"Rusia\">Rusia</a>&nbsp;(<a href=\"https://id.wikipedia.org/wiki/Moskwa\" title=\"Moskwa\">Moskwa</a>),&nbsp;<a href=\"https://id.wikipedia.org/wiki/Timor_Leste\" title=\"Timor Leste\">Timor Leste</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Hongkong\" title=\"Hongkong\">Hongkong</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Korea_Selatan\" title=\"Korea Selatan\">Korea Selatan</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Jepang\" title=\"Jepang\">Jepang</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Belgia\" title=\"Belgia\">Belgia</a>, dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Prancis\" title=\"Prancis\">Prancis</a>.<sup><a href=\"https://id.wikipedia.org/wiki/Persaudaraan_Setia_Hati_Terate#cite_note-3\">[3]</a></sup></p>\r\n', 'UHBS6V-persaudaraan-setia-hati-teratai-akfar-surabaya.jpg', 'ukm', '2020-07-31 02:43:43', '2020-07-31 02:43:43');
INSERT INTO `tb_pages` VALUES (7, 'R2T6MB', 'visi-misi-dan-tujuan', 'Visi, Misi, dan Tujuan', '<h3 style=\"text-align:justify\">VISI</h3>\r\n\r\n<p style=\"text-align:justify\">Menjadi perguruan tinggi kesehatan yang unggul di tingkat nasional dalam pelaksanaan Tridharma perguruan tinggi bidang kesehatan, dan menghasilkan lulusan yang professional dan berakhlak mulia.</p>\r\n\r\n<h3 style=\"text-align:justify\">MISI</h3>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">1. Menyelenggarakan pendidikan kesehatan yang sesuai dengan perkembangan layanan kesehatan.&nbsp;</li>\r\n	<li style=\"text-align:justify\">2. Menyelenggarakan penelitian di bidang kesehatan yang sesuai dengan permasalahan Nasional serta bermanfaat bagi kemajuan pendidikan dan pengabdian kepada masyarakat.</li>\r\n	<li style=\"text-align:justify\">3. Menyelenggarakan pengabdian kepada masyarakat untuk peningkatan derajat kesehatan masyarakat di tingkat Nasional.</li>\r\n	<li style=\"text-align:justify\">4. Menyelenggarakan sistem tata kelola Perguruan Tinggi Kesehatan untuk mewujudkan <em>Good University Governance</em>.</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\">TUJUAN</h3>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">1. Mendorong dan memfasilitasi pengembangan dan penguatan pendidikan ilmu kesehatan yang relevan dengan perkembangan IPTEK.</li>\r\n	<li style=\"text-align:justify\">2. Mendorong dan memfasilitasi sivitas akademika dalam menyelenggarakan penelitian dibidang kesehatan yang relevan dengan perkembangan IPTEK untuk mendukung upaya pengembangan pendidikan dan pengabdian kepada masyarakat.</li>\r\n	<li style=\"text-align:justify\">3. Mendukung dan memfasilitasi peran sivitas akademika dalam menyelenggarakan pengabdian kepada masyarakat dibidang kefarmasian yang didukung dengan IPTEK dan sesuai dengan kebutuhan masyarakat.</li>\r\n	<li style=\"text-align:justify\">4. Mengembangkan dan menguatkan tatakelola pendidikan tinggi yang telah ada untuk mewujudkan <em>Good University Governance</em>. &nbsp;</li>\r\n	<li style=\"text-align:justify\">5. Ikut dan berperan serta secara aktif dalam forum ilmiah dan non ilmiah melalui kerjasama dengan institusi pendidikan, institusi pemerintah, institusi pelayanan kesehatan dan industri terkait.</li>\r\n</ul>\r\n', 'R2T6MB-visi-misi-dan-tujuan.jpg', 'about', '2020-08-05 16:07:53', '2021-02-24 11:55:52');
INSERT INTO `tb_pages` VALUES (8, 'M6Z7Y9', 'kalender-akademik-tahun-ajaran-2020-2021', 'Kalender Akademik Tahun Ajaran 2020 2021', '<p>Kalender Akademik 2020 2021 Akademi Farmasi Surabaya dapat diunduh di sini.</p>\r\n', 'M6Z7Y9-kalender-akademik-2020-2021.png', 'akademik', '2020-08-24 14:27:34', '2020-08-24 14:29:13');
INSERT INTO `tb_pages` VALUES (9, '0Q5P67', 'buku-pedoman-akademik-akfar', 'Buku Pedoman Akademik AKFAR', '<p>Buku Pedoman Akademik AKFAR dapat diunduh di sini.</p>\r\n', '0Q5P67-buku-pedoman-akademik-akfar.', 'akademik', '2020-08-24 14:29:47', '2020-08-24 14:29:47');

-- ----------------------------
-- Table structure for tb_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pendidikan`;
CREATE TABLE `tb_pendidikan`  (
  `id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rel_nidn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenjang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `institusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mulai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `selesai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `edited_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pendidikan
-- ----------------------------
INSERT INTO `tb_pendidikan` VALUES ('73GQFJ', '9907147785', 'S1', 'Universitas Airlangga', '2010', '2014', '2020-09-09 17-55-43', NULL);
INSERT INTO `tb_pendidikan` VALUES ('NHPYFR', '9907147785', 'S2', 'Universitas Airlangga', '2015', '2019', '2020-09-09 17-37-13', '2020-09-09 17-50-39');

-- ----------------------------
-- Table structure for tb_stakeholder
-- ----------------------------
DROP TABLE IF EXISTS `tb_stakeholder`;
CREATE TABLE `tb_stakeholder`  (
  `id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_stakeholder
-- ----------------------------
INSERT INTO `tb_stakeholder` VALUES ('3IKY9C', 'RSJ Menur', NULL, '3IKY9C.png', '2021-02-25 09:05:38', '2021-02-25 09:05:38', NULL);
INSERT INTO `tb_stakeholder` VALUES ('CI63U4', 'Kementerian Kesehatan', NULL, 'CI63U4.png', '2021-02-24 14:06:04', '2021-02-24 14:06:04', NULL);
INSERT INTO `tb_stakeholder` VALUES ('RO57LH', 'RSU Haji Surabaya', NULL, 'RO57LH.png', '2021-02-24 14:05:13', '2021-02-24 14:05:13', NULL);
INSERT INTO `tb_stakeholder` VALUES ('UQWPZG', 'RSUD DR Soetomo', NULL, 'UQWPZG.png', '2021-02-25 09:03:44', '2021-02-25 09:03:44', NULL);
INSERT INTO `tb_stakeholder` VALUES ('XFGR36', 'Kimia Farma', NULL, 'XFGR36.png', '2021-02-24 13:58:59', '2021-02-24 13:58:59', NULL);

-- ----------------------------
-- Table structure for tb_testi
-- ----------------------------
DROP TABLE IF EXISTS `tb_testi`;
CREATE TABLE `tb_testi`  (
  `id` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `angkatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_testi
-- ----------------------------
INSERT INTO `tb_testi` VALUES ('6GPA48', 'Grace Novela', '<p align=\"justify\">Akademi Farmasi Surabaya, Unggul dan Berkarakter.</p>', NULL, '2016', NULL, NULL);
INSERT INTO `tb_testi` VALUES ('YDG4AH', 'Siti Zubaidah', '<p align=\"justify\">Saya bangga menjadi mahasiswa Akademi Farmasi Surabaya. Kini saya dapat bekerja dengan profesional di RSUD Soetomo.</p>', NULL, '2014', NULL, NULL);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'superadmin', 'CFD9664E6FB2496222EF90ABB9BDE452', 'admin', 'Febry San');

SET FOREIGN_KEY_CHECKS = 1;
