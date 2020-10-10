
@if($todo->completed)
                    <span class="fas fa-check text-success cursor-pointer iconsizer " onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()"></span>
                        <form action="{{route('todo.incomplete', $todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" style="display:none" method="post">
                                @csrf
                                @method('delete')
                        </form>


                        @else 
                         <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check  text-muted cursor-pointer iconsizer mt-1"></span>
                        <form action="{{route('todo.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" style="display:none" method="post">
                                @csrf
                                @method('put')
                        </form>
@endif