<?php

require_once 'String.php';

/**
 * Test class for String.
 * Generated by PHPUnit on 2012-12-02 at 17:08:45.
 */
class StringTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var String
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new String;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert (array(0 => 'content,to,parse', 1 => 'content,to,parse')) == array(0 => array('content', 'to', 'parse'), 1 => array('content', 'to', 'parse')).
     *
     * @covers String::csv2Array
     */
    public function testCsv2Array()
    {
        $this->assertEquals(
          array(0 => array('content', 'to', 'parse'), 1 => array('content', 'to', 'parse')),
          $this->object->csv2Array(array(0 => 'content,to,parse', 1 => 'content,to,parse'))
        );
    }

    /**
     * Generated from @assert (array('one', 'two')) == "'one' 'two'".
     *
     * @covers String::extraImplode
     */
    public function testExtraImplode()
    {
        $this->assertEquals(
          "'one' 'two'",
          $this->object->extraImplode(array('one', 'two'))
        );
    }

    /**
     * Generated from @assert ("line one\r\nline two\rline three") == "line one\nline two\nline three".
     *
     * @covers String::makeLFLineEndings
     */
    public function testMakeLFLineEndings()
    {
        $this->assertEquals(
          "line one\nline two\nline three",
          $this->object->makeLFLineEndings("line one\r\nline two\rline three")
        );
    }

    /**
     * Generated from @assert ("one\ntwo\nthree") == array('one', 'two', 'three').
     *
     * @covers String::lines2Array
     */
    public function testLines2Array()
    {
        $this->assertEquals(
          array('one', 'two', 'three'),
          $this->object->lines2Array("one\ntwo\nthree")
        );
    }
}
?>
