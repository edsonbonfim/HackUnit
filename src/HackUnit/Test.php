<?hh

namespace Bonfim\Component\HackUnit;

class Test
{
    public array $status = array(
        'success' => false,
        'failed' => false
    );

    public $expected;
    public $actual;

    public function __construct(
        public $methods = get_class_methods(get_called_class())
    ) : void {}

    public function assertEquals($expected, $actual) : void
    {
        $this->actual = $actual;
        $this->expected = $expected;

        if ($expected === $actual)
            $this->status['success'] = true;
        else
            $this->status['failed'] = true;
    }
}
