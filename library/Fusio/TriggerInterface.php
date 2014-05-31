<?php

namespace Fusio;

use PSX\Http\Request;

interface TriggerInterface
{
	/**
	 * Triggers an specific action from the given request
	 *
	 * @param PSX\Http\Request $request
	 * @param array $parameters
	 * @param Fusio\Context $context
	 */
	public function execute(Request $request, array $parameters, Context $Context = null);

	/**
	 * Returns an array containing the fields which are needed by the trigger
	 *
	 * @return array
	 */
	public function getParameters();
}
