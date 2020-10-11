class VovelCountCase extends TestCase
{
    public function testBasics() {
      $this->assertEquals(5, getCount("abracadabra"));
    }
}