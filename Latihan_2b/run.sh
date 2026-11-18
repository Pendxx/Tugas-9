#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd "$DIR"

PHP_BIN=""
if [ -f "/Users/macbook/Library/Application Support/Herd/bin/php" ]; then
    PHP_BIN="/Users/macbook/Library/Application Support/Herd/bin/php"
elif command -v php &> /dev/null; then
    PHP_BIN=$(command -v php)
fi

if [ -z "$PHP_BIN" ]; then
    echo "PHP binary tidak ditemukan."
    exit 1
fi

PORT=8003
echo "CodeIgniter - Latihan 2b : Toko Online (Port $PORT)"
echo "Buka: http://localhost:$PORT"
"$PHP_BIN" -S localhost:$PORT

