<?php
	use Codesleeve\Stapler\ORM\StaplerableInterface;
	use Codesleeve\Stapler\ORM\EloquentTrait;
class Product extends Eloquent implements StaplerableInterface {

	//Stapler package use and function


	use EloquentTrait;

	protected $fillable = ['avatar', 'reference_no', 'product_title', 'description', 'turnaround', 'min_order', 'valid_until', 'product_category', 'company'];

  public function __construct(array $attributes = array()) {
      $this->hasAttachedFile('avatar', [
          'styles' => [
          	'portrait' => 'x196',
            'medium' => '300x300',
            'thumb' => '100x100',
          ]
      ]);

      parent::__construct($attributes);
  }


	protected $guarded = array();

	public static $rules = array(
		'reference_no' => 'required',
		'product_title' => 'required',
		'description' => 'required',
		'turnaround' => 'required',
		'min_order' => 'required',
		'valid_until' => 'required',
		'product_category' => 'required',
		'company' => 'required'
	);

	public function company()
    {
        return $this->hasOne('Company');
    }
}
