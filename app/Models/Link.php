<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    // relacionando link com um usuário (pertence a um usuário)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(1);
    }

    /**
     * Function responsible for moving the link up or down
     * 
     * @param int $to +1 for move down and -1 for move up
     * @return void
     */
    private function move($to)
    {
        $sort = $this->sort;
        $newSort = $sort + $to;

        $swapWith = $this->user->links()->where('sort', '=', $newSort)->first();

        // dump($this->toArray(), $sort, $newSort, $swapWith->toArray());

        $this->fill(['sort' => $newSort])->save();
        $swapWith->fill(['sort' => $sort])->save();
    }
}