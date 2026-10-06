<?php
/**
 * config/config.example.php — MODELO de configuração (este ficheiro VAI para o Git)
 *
 * Como usar: copiar para config/config.php e preencher. O config.php está no
 * .gitignore e NUNCA deve ser enviado para o repositório.
 *
 * TODO:
 *  1. Fazer o ficheiro devolver (return) um array de configuração com:
 *     - db:  host, nome da BD (cyberwatch), utilizador, password, charset (utf8mb4)
 *     - app: ambiente ('dev' | 'prod'), fuso horário (Europe/Lisbon), nome da sessão
 *     - session: lifetime, httponly, samesite, secure (conforme HTTP/HTTPS)
 *     - detection: valores por defeito de threshold e janela de tempo (opcional)
 *     - log_path: caminho para a pasta logs/
 *  2. No exemplo, deixar as credenciais vazias ou genéricas (nunca as reais).
 *  3. Em src/db.php e src/helpers.php, carregar este ficheiro com require.
 */
