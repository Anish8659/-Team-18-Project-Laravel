Database=mysql; Server=bambishoes-server.mysql.database.azure.com; User Id=vczksknlfx; Password=8R626IQF8V3U34MS$

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "bambishoes-server.mysql.database.azure.com", "vczksknlfx", "8R626IQF8V3U34MS$", "bambishoes-database", 3306, MYSQLI_CLIENT_SSL);
