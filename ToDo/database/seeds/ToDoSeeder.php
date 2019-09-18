<?php

use Illuminate\Database\Seeder;
use App\ToDo;
class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            $s=new ToDo;
            $s->todo="study lesson $i in Laravel";
            $s->save();
        }
    }
}
