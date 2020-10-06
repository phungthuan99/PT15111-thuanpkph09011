<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index() su dung phuong thuc GET, route name la students.index
    public function index()
    {
        $students = Student::all(); //lay ra het
        // hoac $students = Student::orderBy('id', 'desc')->get();

        return view('students.list', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // create() su dung phuong thuc GET, route name la students.create
    public function create(Student $student)
    {
        return view('students.create', ['student' => $student]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $this->name;
        $phone = $this->phone;
        $age = $this->age;
        $gender = $this->gender;
        $address = $this->address;
        $is_active = $this->is_active;

        // thực hiện gọi phương thức server
        $this->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // show su dung phuong thuc GET, route name la students.show
    public function show(Student $student)
    {
        // Neu chi truyen vao $student -> nhan duoc id cua Student
        $studentObjEloquentModel = Student::find($student);
        $studentObjQueryBuilder = DB::table('students')->find($student);

        // Neu truyen Student $student -> thuc hien truy van tim Student co id = $student
        $studentObj = $student;

        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->is_active = $request->is_active;

        // thực hiện gọi phương thức server
        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // Xóa theo id: 1:1
        //kiểm tra tồn tại sinh viên-> xóa
        if ($student) {
            $student->delete();
        }
        // cách 2: Student::destroy($student->id;): n:n
        // Trả về số lượng bản ghi bị xóa
        // redirect về danh sách (có thực hiện truy vấn lấy danh sách mới)
        return redirect()->route('students.index');
    }
}
