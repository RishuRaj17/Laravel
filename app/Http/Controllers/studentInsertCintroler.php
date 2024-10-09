<?php

class studentInsertController extends Controller{
    public function edit($id){
        $student = DB::table('student')->where('id', $id)->first();
        return view('student_edit', ['student' => $student]);
    }

    public function update(Request $request, $id){
        $name = $request->input('student_name');
        DB::update('update student set name=? where id=?', [$name, $id]);
        return 'Record updated Successfully!';
    }

    public function delete($id){
        DB::delete("delete from student where id=?", [$id]);
        return "Record deleted Successfully!";
    }
}

?>