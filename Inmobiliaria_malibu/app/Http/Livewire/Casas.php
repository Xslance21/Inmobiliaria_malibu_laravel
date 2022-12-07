<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Casa;

class Casas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $measures, $desing, $price, $adress;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.casas.view', [
            'casas' => Casa::latest()
						->orWhere('measures', 'LIKE', $keyWord)
						->orWhere('desing', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
						->orWhere('adress', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->measures = null;
		$this->desing = null;
		$this->price = null;
		$this->adress = null;
    }

    public function store()
    {
        $this->validate([
		'measures' => 'required',
		'desing' => 'required',
		'price' => 'required',
		'adress' => 'required',
        ]);

        Casa::create([ 
			'measures' => $this-> measures,
			'desing' => $this-> desing,
			'price' => $this-> price,
			'adress' => $this-> adress
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Casa Successfully created.');
    }

    public function edit($id)
    {
        $record = Casa::findOrFail($id);

        $this->selected_id = $id; 
		$this->measures = $record-> measures;
		$this->desing = $record-> desing;
		$this->price = $record-> price;
		$this->adress = $record-> adress;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'measures' => 'required',
		'desing' => 'required',
		'price' => 'required',
		'adress' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Casa::find($this->selected_id);
            $record->update([ 
			'measures' => $this-> measures,
			'desing' => $this-> desing,
			'price' => $this-> price,
			'adress' => $this-> adress
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Casa Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Casa::where('id', $id);
            $record->delete();
        }
    }
}
