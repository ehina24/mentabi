CREATE TABLE user_list (
    id INT AUTO_INCREMENT,  -- 主キー
    email VARCHAR(255) NOT NULL UNIQUE, -- メールアドレス
    password VARCHAR(255) NOT NULL, -- パスワード
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- 作成日時
    PRIMARY KEY(id)
);

INSERT INTO user_list(email,password)
    VALUES
    ("test@ecc.ac.jp","$2y$10$1a1GDnYxD66pcY7f6uQmPeKAgMGBR/j3Sq.Rs77EyT5Nz57gUXk6u");