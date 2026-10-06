<?php
/**
 * src/db.php — ligação à base de dados com PDO
 * Responsável: Samuel
 *
 * TODO:
 *  1. Carregar config/config.php (caminho relativo com __DIR__).
 *  2. Criar uma função (ex.: get_db()) que devolve UMA instância PDO reutilizável
 *     (padrão singleton simples com variável static).
 *  3. DSN: mysql:host=...;dbname=...;charset=utf8mb4
 *  4. Opções PDO obrigatórias:
 *       - ATTR_ERRMODE => ERRMODE_EXCEPTION
 *       - ATTR_DEFAULT_FETCH_MODE => FETCH_ASSOC
 *       - ATTR_EMULATE_PREPARES => false
 *  5. Capturar PDOException: registar o detalhe em logs/ e NUNCA mostrar
 *     credenciais ou mensagens do MySQL ao utilizador.
 *  6. Definir o fuso horário (Europe/Lisbon) em PHP e, se necessário, na sessão MySQL.
 */
