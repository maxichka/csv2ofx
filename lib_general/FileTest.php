<?php

require_once 'File.php';

/**
 * Test class for File.
 * Generated by PHPUnit on 2012-12-02 at 17:08:20.
 */
class FileTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var File
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new File;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert ('file.ext') == 'ext'.
     *
     * @covers File::getExtension
     */
    public function testGetExtension()
    {
        $this->assertEquals(
          'ext',
          $this->object->getExtension('file.ext')
        );
    }

    /**
     * Generated from @assert ('/path/to/file.ext') == 'ext'.
     *
     * @covers File::getExtension
     */
    public function testGetExtension2()
    {
        $this->assertEquals(
          'ext',
          $this->object->getExtension('/path/to/file.ext')
        );
    }

    /**
     * Generated from @assert ('file.ext') == 'file'.
     *
     * @covers File::getBase
     */
    public function testGetBase()
    {
        $this->assertEquals(
          'file',
          $this->object->getBase('file.ext')
        );
    }

    /**
     * Generated from @assert ('/path/to/file.ext') == 'file'.
     *
     * @covers File::getBase
     */
    public function testGetBase2()
    {
        $this->assertEquals(
          'file',
          $this->object->getBase('/path/to/file.ext')
        );
    }

    /**
     * @covers File::write2File
     * @todo Implement testWrite2File().
     */
    public function testWrite2File()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers File::getFullPath
     * @todo Implement testGetFullPath().
     */
    public function testGetFullPath()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers File::file2Array
     * @todo Implement testFile2Array().
     */
    public function testFile2Array()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers File::file2String
     * @todo Implement testFile2String().
     */
    public function testFile2String()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
?>
