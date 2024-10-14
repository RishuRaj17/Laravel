<?php

class studentInsertController extends Controller{
    // public function edit($id){
    //     $student = DB::table('student')->where('id', $id)->first();
    //     return view('student_edit', ['student' => $student]);
    // }

    public function update(Request $request, $id){
        $name = $request->input('student_name');
        DB::update('update student set name=? where id=?', [$name, $id]);
        return 'Record updated Successfully!';
    }

    public function delete($id){
        DB::delete("delete from student where id=?", [$id]);
        return "Record deleted Successfully!";
    }

    public function insert_form(){

    }

    public function insert(Request $request){
        $name = $request->input('student_name');

        DB::insert("insert into student(name) values(?)", [$name]);
        return "Record inserted done! <a href='/'>click here to go back</a>";
    }

    public function edit($id){
        $student = DB::table('student')->where('id', $id)->first();
        return view('student_edit', ['student' => $student]);
    }

    
}

?>