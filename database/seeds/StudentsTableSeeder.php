<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_slots')->insert([[
            'slotId' => '20654',
            'timeslot' => '8h-12h',
            'classId' => 'T1707M',
            'subject' => 'PHP',
        ], [
            'slotId' => '20655',
            'timeslot' => '13h30-17h30',
            'classId' => 'T1708A',
            'subject' => 'ASF2',
        ], [
            'slotId' => '20656',
            'timeslot' => '17h30-21h',
            'classId' => 'T1608E',
            'subject' => 'EJB',
        ],
        ]);

        DB::table('classes')->insert([[
            'classId' => 'T1707M',
            'createdAt' => '11/02/2018',
            'status' => 1,
        ], [
            'classId' => 'T1708A',
            'createdAt' => '15/02/2018',
            'status' => 1,
        ], [
            'classId' => 'T1608E',
            'createdAt' => '20/02/2018',
            'status' => 1,
        ],
        ]);
        DB::table('students')->insert([[
            'rollNumber' => 'D0051',
            'name' => 'Đào Minh Anh',
        ], [
            'rollNumber' => 'D0052',
            'name' => 'Phan Văn Tùng',
        ], [
            'rollNumber' => 'D0053',
            'name' => 'Đoàn Văn Khánh',
        ], [
            'rollNumber' => 'D0054',
            'name' => 'Vũ Lệ',
        ], [
            'rollNumber' => 'D0055',
            'name' => 'Ngô Lệ',
        ], [
            'rollNumber' => 'D0056',
            'name' => 'Vũ Trần Hoàng ',
        ], [
            'rollNumber' => 'D0057',
            'name' => 'Đỗ Duy Khánh',
        ],
        ]);
        DB::table('student_classes')->insert([[
            'rollNumber' => 'D0051',
            'classId' => 'T1017M',
            'createdAt' => '09/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0052',
            'classId' => 'T1017M',
            'createdAt' => '01/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0053',
            'classId' => 'T1708A',
            'createdAt' => '10/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0054',
            'classId' => 'T1708A',
            'createdAt' => '21/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0055',
            'classId' => 'T1708A',
            'createdAt' => '19/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0056',
            'classId' => 'T1608E',
            'createdAt' => '07/02/2018',
            'status' => 1,
        ], [
            'rollNumber' => 'D0057',
            'classId' => 'T1608E',
            'createdAt' => '11/02/2018',
            'status' => 1,
        ],
        ]);
        DB::table('timeslots')->insert([[
            'slotId' => '20654',
            'start' => '8h',
            'end' => '12h',
        ],[
            'slotId' => '20655',
            'start' => '13h30',
            'end' => '17h30',
        ],[
            'slotId' => '20656',
            'start' => '17h30',
            'end' => '21h',
        ],
        ]);

    }
}
