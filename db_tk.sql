-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Mei 2016 pada 03.29
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id` int(11) NOT NULL,
  `jenis` varchar(16) NOT NULL,
  `ciri` varchar(512) NOT NULL,
  `kekuatan` varchar(512) NOT NULL,
  `kelemahan` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `jenis`, `ciri`, `kekuatan`, `kelemahan`) VALUES
(1, 'Koleris', 'Cenderung untuk berpikiran keras dan percaya diri; mudah bosan dengan terlalu banyak hal yang bersifat detail; menyukai ide yang baru dan inovatif', 'Keinginan sangat kuat, sangat yakin pada kemampuan diri, sangat mandiri, tidak suka diperintah orang lain, suka memberikan perintah, jika menjadi pemimpin paling tidak suka orang yang plinplan, banyak bicara, tetapi tidak produktif', 'Jika kelebihan digunakan berlebihan, sering terlihat bangga dan menunjukkan kekuasaannya, terkadang kurang bijaksana, kalau sudah marah bisa sangat kasar (sarkastis), dapat menghancurkan orang lain hanya dengan kata-kata, penuh temperamen, mudah marah dan mudah memaafkan orang lain, bisa juga mudah melupakan kemarahannya'),
(2, 'Sanguinis', 'Sangat mudah bergaul, people-oriented, kurang perhatian dengan yang detail dan cepat, bosan dengan yang detail; suka bersenang-senang dan banyak bicara', 'Dapat bersahabat dengan siapa saja, sangat peduli dengan orang lain, tampak tidak memiliki beban, selalu terlihat gembira dan bahagia, sangat menyenangkan untuk dijadikan kawan', 'Sering tidak disiplin dan tidak menepati janji, rentang fokus pendek, sulit untuk mendengarkan orang lain, terlihat tidak stabil dan tidak disiplin, cenderung membesar-besarkan sesuatu, cenderung bertindak sebelum berpikir dan terkadang kurang tegas sehingga sering diperalat orang lain'),
(3, 'Plegmatis', 'Sangat dapat diandalkan tetapi membutuhkan lebih banyak rasa percaya diri, jika ditempatkan di posisi baru akan sangat mudah down, terlalu mudah menerima kata "tidak", anda perlu sedikit lebih memaksa', 'Mudah bergaul dan dapat diandalkan, teratur, efisien, menyukai rutinitas, praktis, tidak suka kejutan, konservatif, tipe diplomat, dapat melihat dari berbagai sudut pandang orang lain, bisa sangat sabar dan sangat humoris, bisa menjadi pemimpin hebat yang disenangi bawahan', 'Bisa sangat takut dengan hal baru yang belum dikenal, bisa sangat plinplan, tipe penonton - kurang inisiatif dan kurang aktif, lebih suka di belakang layar, kadangkala kurang bersemangat dan diam, jika tidak diberi penghargaan dan pengarahan maka mereka menjadi frustasi dan menyerah'),
(4, 'Melankolis', 'Rapi dan efisien, lebih suka hal yang terencana daripada yang spontan, suka berpegang teguh pada ide/produk yang telah terbukti berhasil, berorientasi pada data,fakta, dan angka, serta lebih menggunakan alasan daripada emosi', 'Sangat berbakat dan cerdas, penemu/pengembang gagasan\nsangat analitis, perfeksionis dan idealis, tak kenal lelah menghasilkan pekerjaan yang baik, dan tekun dalam mengejar cita-citanya', 'Sering terpusat pada diri mereka sendiri, sering murung/berubah-ubah temperamennya, dikenal dengan sebutan "pencari kesalahan", suka berteori dan cenderung tidak bersosialisasi, sangat pendendam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleris`
--

CREATE TABLE IF NOT EXISTS `koleris` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koleris`
--

INSERT INTO `koleris` (`id`, `pertanyaan`) VALUES
(1, 'Kamu memiliki kemauan yang sangat kuat dan keras kepala. Kamu akan melakukan apa saja untuk mendapatkan apa yang Kamu inginkan'),
(2, 'Kamu bertindak dengan cepat dan mandiri dan suka mengerjakan sesuatu sendiri'),
(3, 'Kamu umumnya tidak memberikan tanggapan yang berlebihan atas kasih sayang yang ditujukan kepada Kamu'),
(4, 'Kamu seringkali sangat aktif. Kamu suka menjelajah mencoba hal baru, dan suka mengambil risiko'),
(5, 'Kamu terkadang sulit dipimpin dan sangat memilih terhadap siapa kamu akan mengikuti'),
(6, 'Kamu mudah marah dan memaksa untuk bisa mendapatkan yang Kamu inginkan'),
(7, 'Kamu sangat menyukai persaingan'),
(8, 'Kamu mengatakan apa yang kamu pikirkan dan memberi tahu apa yang Kamu inginkan. Kamu bisa sangat kasar dalam mengatakan pada orang lain tentang siapa atau apa yang tidak Kamu suka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `melankolis`
--

CREATE TABLE IF NOT EXISTS `melankolis` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `melankolis`
--

INSERT INTO `melankolis` (`id`, `pertanyaan`) VALUES
(1, 'Kamu jika pertama kali bertemu dengan orang yang asing, biasanya Kamu akan merasa agak sungkan. Kamu lambat menerima orang baru. Mula-mula kamu akan menarik diri dan kemudian akan menyesuaikan diri dengan perlahan-lahan'),
(2, 'Kamu menyukai privasi dan kadang kala menyendiri dan jarang bergaul'),
(3, 'Kamu mengajukan banyak pertanyaan dan lebih suka memikirkan sesuatu secara mendalam sebelum mengambil keputusan'),
(4, 'Kamu seringkali mengambil suatu pendekatan yang berhati-hati terhadap suatu hal atau keadaan yang baru'),
(5, 'Level kegiatan fisik (tingkat aktivitas) Kamu biasanya terlihat rendah atau rata-rata'),
(6, 'Emosi Kamu umumnya terlihat lembut sehingga reaksi awalnya (yang tampak/eksternal) terhadap suatu keadaan yang tidak menyenangkan adalah dengan berdiam diri dan terkendali. Reaksi internalnya jauh lebih kuat'),
(7, 'Kamu sering terlihat serius dan/atau sedih'),
(8, 'Kamu mengajukan banyak pertanyaan (sering yang rumit) mengenai hal-hal yang khusus dan meminta penjelasan atau jawaban yang detail atas pertanyaan Kamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plegmatis`
--

CREATE TABLE IF NOT EXISTS `plegmatis` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `plegmatis`
--

INSERT INTO `plegmatis` (`id`, `pertanyaan`) VALUES
(1, 'Kamu lebih sering menunjukkan perilaku yang menyenangkan. Kamu lebih banyak tertawa dan tersenyum daripada berwajah muram'),
(2, 'Kamu sering tampak tenang dan ramah. Kamu umumnya memiliki reaksi yang tenang dan lembut terhadap suatu keadaan'),
(3, 'Kamu kurang aktif dalam mencoba hal-hal baru dan biasanya lebih suka melakukan hal yang telah kamu ketahui dan kamu kenal'),
(4, 'Kamu mudah bekerjasama dengan orang lain dan biasanya mudah cocok dengan orang lain'),
(5, 'Kamu terkadang segera menyerah bila mendapat tekanan dan mungkin meniru perilaku, aturan dan sifat orang lain secara berlebihan'),
(6, 'Kamu mengalami kesulitan untuk bisa menerima perubahan yang bersifat mendadak. Kamu bisa bersikeras untuk mempertahankan keadaan agar tidak berubah. Kamu menginginkan segalanya tenang dan damai'),
(7, 'Kamu tidak suka berkelahi dan menghindari pertentangan'),
(8, 'Kamu biasanya lebih banyak mendengarkan daripada berbicara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL,
  `quote` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quotes`
--

INSERT INTO `quotes` (`id`, `quote`) VALUES
(1, '"Karena setiap saat kepribadian orang bisa berubah..."'),
(2, '"Mungkin kamu punya 2 kepribadian..."'),
(3, '"Luangkan waktumu 5 menit untuk mengenal diri kamu saat ini"'),
(4, '"Kenali pribadimu, kamu mungkin tidak tahu bakat apa yang kamu miliki!"'),
(5, '"Termasuk pribadi seperti apakah kamu?"'),
(6, '"Kenali kekuatan dan kelemahanmu lewat kepribadianmu!"'),
(7, '"Biar lebih seru, ajak temanmu ikutan juga!"'),
(8, '"Juga cocok untuk kamu yang lagi nggak ada kerjaan!"'),
(9, '"Proyek MSP Pimp-up Your Skill! saya :)"'),
(10, '"Di deploy pake Microsoft Azure lho!"'),
(11, '"Lakukan dengan jujur kalau mau hasil yang jujur"'),
(12, '"Lihat kodenya di repository <a href=''https://github.com/arbilin/Tes-Kepribadian.git'' id=''link''>github saya</a>"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanguinis`
--

CREATE TABLE IF NOT EXISTS `sanguinis` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sanguinis`
--

INSERT INTO `sanguinis` (`id`, `pertanyaan`) VALUES
(1, 'Kamu tidak pernah santai/rileks. Kamu selalu ingin bekerja walaupun waktunya sudah selesai'),
(2, 'Kamu menunjukkan perubahan emosi yang jelas. Kamu bertindak berdasarkan perasaan dan memiliki bakat untuk mengerjakan sesuatu dengan dramatis'),
(3, 'Kamu umumnya optimis dan antusias dalam dalam hampir setiap situasi'),
(4, 'Kamu mudah bergaul dengan orang dan suka berada di keramaian'),
(5, 'Kamu kerap berpindah dari suatu kegiatan ke kegiatan lain, sering tanpa menyelesaikan kegiatan itu'),
(6, 'Kamu tampil kurang rapi, berantakan, dan/atau pelupa bila diminta mengerjakan sesuatu'),
(7, 'Kamu sangat peduli dengan apa yang dikerjakan oleh orang lain'),
(8, 'Kamu sangat gemar bercerita. Kamu sangat suka menceritakan kepada orang lain mengenai prestasi Kamu dan kawan-kawan Kamu. Kamu bisa agak manipulatif dengan kemampuan Kamu meyakinkan orang lain untuk melakukan apa yang Kamu inginkan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
