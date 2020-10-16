// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testBasics() {
      $this->assertEquals(3, findShort("bitcoin take over the world maybe who knows perhaps"));
      $this->assertEquals(3, findShort("turns out random test cases are easier than writing out basic ones"));
    }
}