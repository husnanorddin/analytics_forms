<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')


    <!-- New Task Form -->
    <form action="{{ url('LAB 8') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

                        <!-- Task Name -->
                <div >
                    <label for="task" class="col-sm-3 control-label"> Rapid Survey on R&D Disciplines in UPM </label><br>
                    <label for="task" class="col-sm-4 control-label"> Deputy Vice Chancellor's Office (Research and Innovation) </label></br>
</div>
                    <p></p>
  <p></p>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" align="left" href="https://analytics.upm.edu.my/info" class="btn btn-primary">Learn More ></button>

                            </button>
                            </div>


            <p></p>
</div>

            <form><table align="center" style ="width : 80%">
                 <tr> <td>Staff ID*</td>
                    <td><input type="text" name="firstname" placeholder="A23456"></td></tr><p></p>
                    <p></p><p></p>
                   <tr><td>Author ID*</td>
                    <td><input type="text" name="lastname"></td></tr><p></p>
                    <p></p><p></p>
        <tr><td>Field of Research* </td>
            <td><select name="Field of Research">
           <option value="Type to search or select from this dropdown list">Type to search or select from this dropdown list</option>
            <option value="Abnormal Psychology">Abnormal Psychology</option>
            <option value="Accelerator Technology">Accelerator Technology</option>
            <option value="Accounting">Accounting</option>
        </select></td></tr>
            <p></p>
<p></p><p></p>
        <tr><td>Socio-economic Objective*</td>
            <td><select name="Socio-economic Objective(seo)">
            <option value="Type to search or select from this dropdown list">Type to search or select from this dropdown list</option>
            <option value="Defence">Defence</option>
            <option value="Defence Equipment">Defence Equipment</option>
            <option value="Crop Production">Crop Production</option>
        </select></td></tr>
        <p></p>

                    <p></p><p></p>
        <tr><td>Comment</td>
        <td><input type="text" name="comment"></td></tr><p></p>

            </table></form>

            <div>
        </div><p></p>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" href="errors.blade.php" class="btn btn-primary">Submit</button>

                </button>

                <button type="clear" href="errors.blade.php" class="btn btn-warning">Clear</button>

                </button>


                <head>
                    <title>Bootstrap Example</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


                </head>


            </div>
        </div>
    </form>
</div>

@if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Current Tasks
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                <th>Task</th>
                <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        <td>
                    <tr>

                        <td>
                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection