
CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `users` (`name`, `gender`, `contact`, `email`, `username`, `password`) VALUES
('user', 'male', 7897897897, 'user@test.com', 'user', 'user');

--
-- Indexes for dumped tables

-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`,`username`);
