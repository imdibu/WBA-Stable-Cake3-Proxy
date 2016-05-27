<?php

namespace App\Extensions\Database;

use Cake\Database\QueryCompiler;

/**
 * Responsible for compiling a Query object into its SQL representation
 * for SQL Server
 *
 * @internal
 */
class SqlserverCompiler extends QueryCompiler
{

    /**
     * SQLserver does not support ORDER BY in UNION queries.
     *
     * @var bool
     */
    protected $_orderedUnion = false;

    /**
     * {@inheritDoc}
     */
    protected $_templates = [
        'delete' => 'DELETE',
        'update' => 'UPDATE %s',
        'where' => ' WHERE %s',
        'group' => ' GROUP BY %s ',
        'having' => ' HAVING %s ',
        'order' => ' %s',
        'offset' => ' OFFSET %s ROWS',
        'epilog' => ' %s'
    ];

    /**
     * {@inheritDoc}
     */
    protected $_selectParts = [
        'select', 'from', 'join', 'where', 'group', 'having', 'order', 'offset',
        'limit', 'union', 'epilog'
    ];

    /**
     * Generates the INSERT part of a SQL query
     *
     * To better handle concurrency and low transaction isolation levels,
     * we also include an OUTPUT clause so we can ensure we get the inserted
     * row's data back.
     *
     * @param array $parts The parts to build
     * @param \Cake\Database\Query $query The query that is being compiled
     * @param \Cake\Database\ValueBinder $generator the placeholder generator to be used in expressions
     * @return string
     */
    protected function _buildInsertPart($parts, $query, $generator)
    {
        $table = $parts[0];
        $columns = $this->_stringifyExpressions($parts[1], $generator);
        return sprintf('INSERT INTO %s (%s)', $table, implode(', ', $columns));
    }

    /**
     * Generates the LIMIT part of a SQL query
     *
     * @param int $limit the limit clause
     * @param \Cake\Database\Query $query The query that is being compiled
     * @return string
     */
    protected function _buildLimitPart($limit, $query)
    {
        if ($limit === null || $query->clause('offset') === null) {
            return '';
        }

        return sprintf(' FETCH FIRST %d ROWS ONLY', $limit);
    }
}
