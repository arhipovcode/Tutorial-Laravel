<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(): Collection
    {
        $sql = "SELECT * FROM {$this->table}"; //вернет все поля (array)
//        return DB::select($sql);
//        return DB::table($this->table)->get(); //этот вариант вернет коллекцию
        return DB::table($this->table)
            ->select(['id', 'title', 'status', 'author', 'description', 'created_at'])
            ->get(); //вернет выборку указанную в select
    }

    public function getNewsById(int $id): mixed
    {
//        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
//        return DB::selectOne($sql, ['id' => $id]);
        return DB::table($this->table)->find($id);
    }
}
