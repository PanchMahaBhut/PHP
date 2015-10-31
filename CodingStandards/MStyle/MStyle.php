<?php namespace PanchMahaBhut\PHP\CodingStandards\MStyle; //Namespace At begiening

/*@AUTHOR Manish Dhruw <BloodAnzel@gmail.com>
+=======================================================================================================================
|Starting Comment Block
|
|
|
|
|@CREATED -Fri 30 Oct 2015 08:33:34 PM IST 
|@UPDATED
| -
|
|
|ENDING Comment Block
+---------------------------------------------------------------------------------------------------------------------*/
class MStyle extends User
{

	//Private Properties starts with underscore
	//Dynamic Properties might need loader method
	private $_dynamicProperties =
	[
		'A'	=> 'avatarObject',

		'P'	=> 'passwordObject',

		'G'	=> 'gender',
	];

	//Getter For Dynamic properties
	public function G( $key )
	{
		if( isset( $this->_dynamicProperties[$key] ) )
		{
			return $this->_dynamicProperties[$key];
		}
	}



	private $_name;

	//getter for name without get
	public function name()
	{
		return $this->_name;
	}

	//setters can be chainable if possible
	public function setName( $name )
	{
		$this->_name = $name;
		return $this;
	}

}
