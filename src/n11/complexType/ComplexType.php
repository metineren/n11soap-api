<?php
namespace N11\complexType;

use ArrayAccess;
use ReflectionMethod;

class ComplexType implements Arrayable, ArrayAccess
{
	/**
	 * @var array $container
	 *
	 */
	private $container = array();

	/**
	 * Whether a offset exists
	 * @link https://php.net/manual/en/arrayaccess.offsetexists.php
	 *
	 * @param mixed $offset <p>
	 * An offset to check for.
	 * </p>
	 *
	 * @return boolean true on success or false on failure.
	 * </p>
	 * <p>
	 * The return value will be casted to boolean if non-boolean was returned.
	 * @since 5.0.0
	 */
	public function offsetExists( $offset )
	{
		return isset($this->container[$offset]);
	}

	/**
	 * Offset to retrieve
	 * @link https://php.net/manual/en/arrayaccess.offsetget.php
	 *
	 * @param mixed $offset <p>
	 * The offset to retrieve.
	 * </p>
	 *
	 * @return mixed Can return all value types.
	 * @since 5.0.0
	 */
	public function offsetGet( $offset )
	{
		return isset($this->container[$offset]) ? $this->container[$offset] : null;
	}

	/**
	 * Offset to set
	 * @link https://php.net/manual/en/arrayaccess.offsetset.php
	 *
	 * @param mixed $offset <p>
	 * The offset to assign the value to.
	 * </p>
	 * @param mixed $value <p>
	 * The value to set.
	 * </p>
	 *
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetSet( $offset, $value )
	{
		if (is_null($offset)) {
			$this->container[] = $value;
		} else {
			$this->container[$offset] = $value;
		}
	}

	/**
	 * Offset to unset
	 * @link https://php.net/manual/en/arrayaccess.offsetunset.php
	 *
	 * @param mixed $offset <p>
	 * The offset to unset.
	 * </p>
	 *
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetUnset( $offset )
	{
		unset($this->container[$offset]);
	}

	/**
	 * Get the instance as an array.
	 *
	 * @return array
	 */
	public function toArray()
	{
		return $this->object_to_array($this->container);
	}

	/**
	 * ComplexType constructor.
	 * @throws \ReflectionException
	 */
	public function __construct()
	{
		$args = func_get_args();

		$class = get_called_class();

		$reflection_method = new ReflectionMethod($class, '__construct');

		if (count(func_get_args()) && count($reflection_method->getParameters()) == count(func_get_args()))
		{
			foreach ($reflection_method->getParameters() as $key => $parameter)
			{
				if (is_null($args[$key]) && $parameter->isDefaultValueAvailable() && is_null($parameter->getDefaultValue()))
				{
					$this[$parameter->getName()] = null;
				}
				else
				{
					if ($parameter->hasType())
					{
						if (strpos($parameter->getType()->getName(), __NAMESPACE__) !== false)
						{
							$this[$parameter->getName()] = $args[$key]->toArray();
						}
						else
						{
							$this[$parameter->getName()] = $args[$key];
						}
					}
					else
					{
						$this[$parameter->getName()] = $args[$key];
					}
				}

			}
		}
	}

	/**
	 * @param $object
	 *
	 * @return array
	 */
	private function object_to_array($object)
	{
		if (is_array($object) || is_object($object))
		{
			$result = array();
			foreach ($object as $key => $value)
			{
				$result[$key] = $this->object_to_array(is_object($value) ? $value->toArray() : $value);
			}
			return $result;
		}
		return $object;
	}
}