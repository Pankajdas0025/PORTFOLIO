CREATE TABLE portfolio_data (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  email varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  subject varchar(100) NOT NULL,
  message TEXT NOT NULL,
  date timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
)
