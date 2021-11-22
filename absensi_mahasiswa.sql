-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2021 at 11:24 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int NOT NULL,
  `nim` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `alasan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nim`, `nama_mahasiswa`, `kelas`, `program_studi`, `waktu`, `keterangan`, `alasan`) VALUES
(7581, 1234, 'febry', 'mi3a', 'Manajemen Informatika', '2021-11-22 16:14:10', 'sakit', 'sakit '),
(7906, 1212, 'hafidz', 'hafidz', 'hafidz', '2021-11-22 16:13:11', 'izin', 'nenek saya kecelakaan'),
(9766, 85, 'Kordula Prium', 'Yellow', 'Yellow', '2021-11-22 16:18:49', 'hadir', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `email`, `password`, `nama`, `kelas`, `program_studi`, `alamat`, `tanggal_lahir`) VALUES
(1, 'admin@admin', 'admin', 'admin', '', '', '', '2021-11-30'),
(3, 'cmunnings2@qq.com', 'DU4LcZHrqzsE', 'Carol-jean Munnings', 'Orange', 'Maroon', '00 Fordem Plaza', '2021-07-04'),
(4, 'cbigleyh@bravesites.com', 'wLxlzr', 'Clari Bigley', 'Orange', 'Khaki', '11772 Sunfield Center', '2021-02-27'),
(8, 'chuntonq@google.it', 'eLoZ8DXZ9X', 'Cassie Hunton', 'Turquoise', 'Indigo', '9041 Tony Plaza', '2021-03-29'),
(18, 'ncosgrove4@miibeian.gov.cn', 'MyGsDE0LVO', 'Ninnetta Cosgrove', 'Fuscia', 'Violet', '85461 Mockingbird Alley', '2021-07-31'),
(28, 'tmelettic@altervista.org', 'XWzUrCHaPGM', 'Toby Meletti', 'Indigo', 'Purple', '4 Morning Pass', '2021-05-24'),
(31, 'tsanches5@nps.gov', 'Ill0ZTQJc5y', 'Thatcher Sanches', 'Indigo', 'Indigo', '35 Bowman Crossing', '2021-08-22'),
(57, 'jpykermans@mlb.com', 'RwkE4CBT', 'Jackelyn Pykerman', 'Mauv', 'Violet', '7 Golden Leaf Place', '2021-06-26'),
(61, 'dknowlson19@last.fm', '9uBHdm4', 'Deeann Knowlson', 'Mauv', 'Indigo', '748 Esch Trail', '2021-05-14'),
(76, 'kwinslade10@craigslist.org', 'qyHJlr8uW', 'Kary Winslade', 'Teal', 'Goldenrod', '79 Anniversary Parkway', '2021-08-03'),
(81, 'ndunfordi@smugmug.com', 'S6Uui9Tqp', 'Neron Dunford', 'Fuscia', 'Goldenrod', '917 Florence Circle', '2020-12-01'),
(85, 'kprium9@sciencedirect.com', 'SajEQjHBq', 'Kordula Prium', 'Yellow', 'Yellow', '30 Menomonief sitorus', '2021-04-29'),
(88, 'gflannigank@fc2.com', 'OPvGyXC', 'Garret Flannigan', 'Violet', 'Mauv', '6955 Lillian Way', '2021-01-10'),
(126, 'isotworth1d@fda.gov', 'DkYexDqF', 'Illa Sotworth', 'Fuscia', 'Khaki', '93127 Summerview Alley', '2020-11-22'),
(142, 'aketteman11@nih.gov', 'YizKnMlCF', 'Angelo Ketteman', 'Green', 'Turquoise', '8 Lakeland Junction', '2021-03-13'),
(231, 'bbothbiet@newyorker.com', '2yN7R07b8m', 'Bellanca Bothbie', 'Indigo', 'Violet', '8 Mitchell Trail', '2021-05-06'),
(412, 'kfarnaby6@utexas.edu', 'RtmtOL', 'Korey Farnaby', 'Teal', 'Pink', '0336 Bashford Junction', '2021-08-16'),
(453, 'asahnowf@rambler.ru', 't6MB97lOl8tQ', 'Ali Sahnow', 'Maroon', 'Turquoise', '36 Michigan Hill', '2021-03-05'),
(547, 'hstenbridge15@microsoft.com', 'VHTn4xz', 'Hermione Stenbridge', 'Purple', 'Fuscia', '653 Stuart Place', '2021-05-20'),
(605, 'rwaycot8@stumbleupon.com', 'f0Bcug5HXPSg', 'Rhys Waycot', 'Teal', 'Aquamarine', '56466 Kings Parkway', '2021-02-25'),
(640, 'vscurrah17@mozilla.com', 'A0KVTHXPH', 'Vonni Scurrah', 'Goldenrod', 'Teal', '670 6th Court', '2021-04-13'),
(995, 'bretter3@symantec.com', 'HGOaFU3ij681', 'Barbe Retter', 'Crimson', 'Goldenrod', '1 Buena Vista Court', '2021-09-19'),
(1212, 'hafidz@hafidz.com', 'hafidz', 'hafidz', 'hafidz', 'hafidz', 'pertamina', '2021-11-14'),
(1234, 'febry@febry.com', 'febry', 'febry', 'mi3a', 'Manajemen Informatika', 'medan', '2021-11-16'),
(1411, 'gmardlingg@arstechnica.com', 'MNcDmposyc', 'Gannon Mardling', 'Turquoise', 'Goldenrod', '20078 Sycamore Avenue', '2020-12-13'),
(3464, 'dbarrarp@netlog.com', '68t6gqX', 'Davita Barrar', 'Mauv', 'Green', '8747 Ramsey Point', '2021-10-14'),
(5235, 'ofrizzell18@phoca.cz', 'AwbGSYIW', 'Oby Frizzell', 'Green', 'Crimson', '22 Park Meadow Parkway', '2021-10-08'),
(5819, 'bpearsm@cisco.com', 'Ej00BLA', 'Barny Pears', 'Aquamarine', 'Mauv', '0020 Maple Pass', '2021-09-19'),
(6381, 'nmackerley0@yandex.ru', '8XwFN7k2AGT', 'Noam MacKerley', 'Pink', 'Red', '5823 Orin Alley', '2021-02-09'),
(6516, 'tcorbie1c@51.la', 'hJtPRQ', 'Tabb Corbie', 'Maroon', 'Red', '02341 Fuller Hill', '2020-11-23'),
(7153, 'nlorentzena@cdc.gov', 'fHXMiuCJUFLV', 'Nathanial Lorentzen', 'Turquoise', 'Pink', '6468 1st Junction', '2021-08-31'),
(10741, 'bpine1a@skyrock.com', 'IbJSkf7bNwG', 'Bernetta Pine', 'Green', 'Goldenrod', '08942 Carberry Street', '2021-09-03'),
(13125, 'dalsford1@bloomberg.com', 'tOh0vs', 'Delcine Alsford', 'Teal', 'Maroon', '0608 Fair Oaks Point', '2021-06-03'),
(26871, 'thorseyb@cloudflare.com', 'aPEmBf', 'Terrill Horsey', 'Indigo', 'Green', '660 Gina Parkway', '2021-01-06'),
(32768, 'owheatonr@house.gov', 'XJ5j7onQIZ', 'Odetta Wheaton', 'Blue', 'Maroon', '568 John Wall Parkway', '2021-07-30'),
(34420, 'tdeletey@tuttocitta.it', 'qwyZB3', 'Tracee Delete', 'Puce', 'Crimson', '0066 Doe Crossing Junction', '2021-10-18'),
(54488, 'btrevord@istockphoto.com', 'sUodeoBmdb9', 'Blake Trevor', 'Teal', 'Mauv', '913 Clarendon Point', '2021-03-16'),
(696969, 'sixnine@gmail.com', 'sixnine', '6ix9ine', 'sixnine', 'enam sembilan', 'entah dimana', '2021-11-10'),
(2005102060, 'hafidzalfatih04@gmail.com', 'hafidz', 'sayahafidz', 'MI3A', 'Manajemen Informatika', 'Perbaungan', '2001-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
