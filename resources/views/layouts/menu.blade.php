@if(\Auth::user()->hasRole('admin'))
<li class="{{ Request::is('branches*') ? 'active' : '' }}">
  <a href="{{ route('branches.index') }}"><i class="fa fa-edit"></i><span>Branches</span></a>
</li>

<li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
  <a href="{{ route('classrooms.index') }}"><i class="fa fa-edit"></i><span>Classrooms</span></a>
</li>
<li class="{{ Request::is('lessons*') ? 'active' : '' }}">
  <a href="{{ route('lessons.index') }}"><i class="fa fa-edit"></i><span>Lessons</span></a>
</li>
@endif