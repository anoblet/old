<?
Class A
{
	Static Function Function_A()
	{
		Return "A";
	}
}
Class B Extends A
{
	Static Function Function_B()
	{
		Return "B";
	}
}

?>
<?
echo A::Function_A();
A::Function_A();
B::Function_A();
B::Function_B();
?>