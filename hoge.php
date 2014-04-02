<?php

class Database
{
    private static $configs = [
        'master' => [
            'host' => 'localhost',
            'port' => '3312',
            'db_name' => '3312',
            'user' => 'hoge',
            'pass' => 'hoge',
        ]
    ];
    private static $connections = [];
    public static function get_connection($db_name)
    {
        if (isset(self::connections[$db_name])) {
            return self::connections[$db_name];
        }
        self::connections[$db_name] = new PDO(
            sprintf('mysql:host=%s;dbname=%s;charset=utf8', self::config[$db_name]['host'], self::config[$db_name]['db_name']),
            self::config[$db_name]['user'],
            self::config[$db_name]['pass'],
        );
        return self::config[$db_name];
    }
}
