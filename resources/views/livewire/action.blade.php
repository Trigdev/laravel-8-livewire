<div>
    <button type="button" wire:click="addTwoNumbers(32, 55)"> Sum </button> <br />

    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea> <br />

    <form wire:submit.prevent="getSum">
        Num 1 : 
        <input type="text" name="num1" wire:model='num1' /> 
        Num 2 : 
        <input type="text" name="num2" wire:model='num2' /> 
        <button type="submit"> Submit </button>
    </form>

    Sum : {{$sum}}
    Message : {{$message}}
</div>
