<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <x-select
        label="Select Status"
        icon="home"
        placeholder="Select one status"
        :options="['Active', 'Pending', 'Stuck', 'Done']"
        wire:model.defer="select"
    />

    <x-input icon="user" label="Name" placeholder="your name" />

    <x-inputs.currency
        label="Currency"
        placeholder="Currency"
        icon="currency-dollar"
        wire:model="currency"
    />

    <x-datetime-picker
        label="Appointment Date"
        placeholder="Appointment Date"
        wire:model.defer="datetime"
    />

    <x-button icon="home" label="No Color" />
    <x-button icon="pencil" primary label="Primary" />
    <x-button icon="clipboard-list" secondary label="Secondary" />
    <x-button icon="check" positive label="Positive" />
    <x-button icon="x" negative label="Negative" />
    <x-button icon="exclamation" warning label="Warning" />
    <x-button icon="information-circle" info label="Info" />
    <x-button icon="ban" dark label="Dark" />
</div>
