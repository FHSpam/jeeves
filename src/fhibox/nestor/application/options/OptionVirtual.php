<?php

namespace fhibox\nestor\application\options;


use fhibox\jeeves\core\Option as Option;

/**
 * Description of Option
 *
 * @author Francois hill
 */
class OptionVirtual extends Option
{
	public function validate_($value)
	{
		// Cannot be an array
		// TODO
		// Must be a boolean
		// TODO

		return true;
	}

}
