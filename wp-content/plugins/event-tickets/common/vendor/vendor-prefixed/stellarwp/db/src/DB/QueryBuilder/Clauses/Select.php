<?php
/**
 * @license GPL-2.0
 *
 * Modified by the-events-calendar on 09-May-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace TEC\Common\StellarWP\DB\QueryBuilder\Clauses;

/**
 * @since 1.0.0
 */
class Select {
	/**
	 * @var string
	 */
	public $column;

	/**
	 * @var string
	 */
	public $alias;

	/**
	 * @param  string  $column
	 * @param  string|null  $alias
	 */
	public function __construct( $column, $alias = null ) {
		$this->column = trim( $column );
		$this->alias  = trim( $alias );
	}
}
