class OppositeTest extends TestCase {
  public function testThatOppositeWorksForExamplesProvidedInDescription() {
    $this->assertEquals(opposite(1), -1);
    $this->assertEquals(opposite(14), -14);
    $this->assertEquals(opposite(-34), 34);
  }
  public function testThatOppositeWorksForMyCustomTests() {
    // TODO: Implement TDD cycle: write failing test, write code to pass it, repeat
  }
}