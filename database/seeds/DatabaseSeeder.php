<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Payment;
use App\User;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
    }
}




class StudentSeeder extends Seeder
{
    /**
     * Run the$ database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i =10;$i<100;$i++)
        {
        	$student = new Student;
        	$student->student_id = '12050'.$i;
            $student->name = 'mahbbub'.$i;
            $student->dept='CSE';
            $student->level=$i%5+1;
            $student->term=$i%2+1;
            $student->hall='swh';
            $student->mess_card_no='34'.$i;
            $student->library_card_no='78'.$i;
            $student->resident_status=($i%3)?'Resident':'Attached';
            $student->room_no = '2'.$i;
        	$student->save();
        
        }
        for($i =10;$i<150;$i++)
        {
            $student = new Student;
            $student->student_id = '11050'.$i;
            $student->name = 'sonjoy'.$i;
            $student->dept='CSE';
            $student->level=$i%5+1;
            $student->term=$i%2+1;
            $student->hall='aula';
            $student->mess_card_no='67'.$i;
            $student->library_card_no='23'.$i;
            $student->resident_status=($i%3)?'Resident':'Attached';
            $student->room_no = '2'.$i;
            $student->save();
        
        }
    }
}



class PaymentSeeder extends Seeder
{
    /**
     * Run the$ database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i =10;$i<50;$i++)
        {
            $payment = new Payment;
            $payment->payment_id = $i;
            $payment->student_id = '12050'.$i;
            $payment->fee_type = 'mess';
            $payment->amount = 1200;
            $payment->payment_date = \Carbon\Carbon::now();
            $payment->bank_scroll = $i.'34';
            $payment->save();
        
        }
    }
}


class ComplaintsSeeder extends Seeder
{
    /**
     * Run the$ database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i =10;$i<50;$i++)
        {
            $complaint = new Complaint;
          
            $complaint->save();
        
        }
    }
}


class UserSeeder extends Seeder
{
    /**
     * Run the$ database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i =0;$i<5;$i++)
        {
            $user = new User;
            $user->username = '100'.$i;
            $user->password = bcrypt('100'.$i);
            $user->hall='swh';
            $user->user_type='supervisor';
            $user->save();
        
        }
        for($i =5;$i<10;$i++)
        {
            $user = new User;
            $user->username = '100'.$i;
            $user->password = bcrypt('100'.$i);
            $user->hall='aula';
            $user->user_type='supervisor';
            $user->save();
        
        }

        for($i =0;$i<5;$i++)
        {
            $user = new User;
            $user->username = '200'.$i;
            $user->password = bcrypt('200'.$i);
            $user->hall='swh';
            $user->user_type='provost';
            $user->save();
        
        }
        for($i =5;$i<10;$i++)
        {
            $user = new User;
            $user->username = '200'.$i;
            $user->password = bcrypt('200'.$i);
            $user->hall='aula';
            $user->user_type='provost';
            $user->save();
        
        }

        for($i =10;$i<100;$i++)
        {
            $user = new User;
            $user->username = '12050'.$i;
            $user->password = bcrypt('12050'.$i);
            $user->hall='swh';
            $user->user_type='student';
            $user->save();
        
        }
        for($i =10;$i<100;$i++)
        {
            $user = new User;
            $user->username = '11050'.$i;
            $user->password = bcrypt('11050'.$i);
            $user->hall='aula';
            $user->user_type='student';
            $user->save();
        
        }
    }


}


class EmployeeSeeder extends Seeder
{
    /**
     * Run the$ database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i =0;$i<5;$i++)
        {
            $user = new Employee;
            $user->employee_id = '100'.$i;
            $user->name = 'superviosr'.$i;
            $user->designation = 'superviosr';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='swh';
            //$user->user_type='supervisor';
            $user->phone_no='0177878398'.$i;

            $user->save();
        
        }
        for($i =5;$i<10;$i++)
        {
            $user = new Employee;
            $user->employee_id = '100'.$i;
            $user->name = 'supervisor'.$i;
            $user->designation = 'superviosr';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='aula';
            //$user->user_type='supervisor';
            $user->phone_no='0177878398'.$i;

            $user->save();
        
        }

        for($i =0;$i<5;$i++)
        {
            $user = new Employee;
            $user->employee_id = '200'.$i;
            $user->name = 'provost'.$i;
            $user->designation = 'provost';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='swh';
            //$user->user_type='supervisor';
            $user->phone_no='0177878398'.$i;

            $user->save();
        
        }
        for($i =5;$i<10;$i++)
        {
            $user = new Employee;
            $user->employee_id = '200'.$i;
            $user->name = 'provost'.$i;
            $user->designation = 'provost';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='aula';
            $user->phone_no='0177878398'.$i;
            $user->save();
        
        }

         for($i =0;$i<10;$i++)
        {
            $user = new Employee;
            $user->employee_id = '500'.$i;
            $user->name = 'guard'.$i;
            $user->designation = 'guard';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='swh';
            $user->phone_no='0155878398'.$i;
            $user->save();
        
        }

         for($i =10;$i<20;$i++)
        {
            $user = new Employee;
            $user->employee_id = '500'.$i;
            $user->name = 'guard'.$i;
            $user->designation = 'guard';
            //$user->password = bcrypt('sup'.$i);
            $user->hall='aula';
            $user->phone_no='016587839'.$i;
            $user->save();
        
        }

       
    }


}

