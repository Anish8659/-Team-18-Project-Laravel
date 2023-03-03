Database=mysql; Server=bambishoes-server.mysql.database.azure.com; User Id=iyduhmknsq; Password=3LKGE6Y6XM8QJSJV$

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "bambishoes-server.mysql.database.azure.com", "iyduhmknsq", "3LKGE6Y6XM8QJSJV$", "bambishoes-database", 3306, MYSQLI_CLIENT_SSL);
