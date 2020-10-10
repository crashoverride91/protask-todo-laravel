
    <div class="justify-content-center">
            <div class="">
                <h2 class="text-2xl pb-2 text-lg"> Add steps for task</h2>
                    <span wire:click="increment" class="fas fa-plus cursor-pointer text-danger mb-3" />
            </div>

            @foreach($steps as $step)
            <div class="flex p-1" wire:key="{{$loop->index}}">
                <input name="stepName[]" type="text" class="rounded border w-100 py-2 px-2"  
                placeholder="{{'Describe step '.($loop->index+1)}}" value="{{$step['name']}}"/>
                <input name="stepId[]" type="hidden" value="{{$step['id']}}"/>
                <span class="fas fa-times text-danger p-2" wire:click="remove({{$loop->index}})"/>
            </div>
            @endforeach
    </div>
   
   
