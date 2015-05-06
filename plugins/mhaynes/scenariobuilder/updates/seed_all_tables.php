<?php namespace Mhaynes\ScenarioBuilder\Updates;

use mhaynes\scenarioBuilder\Models\scenario;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

	public function run()
	{
		Scenario::create(['scID' => 3,		'scHeadLine' => 'How do I complete a new passport application?',		'scDescription'=>'You may renew if your most recent Canadian passport: - Passport is still valid or expired no more then a year; - Same name as current application; - Issued with 5 or 10 year validity; - Not damaged; - Not reported as lost or stolen; - You were at least 16 years old at the time of the previous application. Did you answer yes to all the questions above?']);
		Scenario::create(['scID' => 11,		'scHeadLine' => 'Is it safe to travel to my destination?',				'scDescription'=>'INDIA - Exercise a high degree of caution. There is no nationwide advisory in effect for India. However, you should exercise a high degree of caution due to a continuing threat of terrorist attacks throughout the country at all times. Regional Advisory for Manipur and the border areas of Arunachal Pradesh. Foreign Affairs, Trade and Development Canada advises against non-essential travel to Manipur and&nbsp;the areas of Arunachal Pradesh that border with Burma, due to the threat of insurgency.']);
		Scenario::create(['scID' => 7,		'scHeadLine' => 'Ipsum Lorem?',											'scDescription'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in urna vel libero commodo faucibus. Donec viverra turpis nec nibh efficitur fermentum. Donec porta purus et sapien ultricies iaculis. Aenean in neque a elit molestie egestas. Pellentesque id nunc euismod, vehicula risus eu, gravida massa. Mauris quis mollis nibh.']);
		Scenario::create(['scID' => 4,		'scHeadLine' => 'Pellentesque fringilla malesuada eli?',				'scDescription'=>'urabitur posuere, orci et sollicitudin ultrices, metus urna viverra mi, vel porttitor augue nibh at justo. Praesent posuere elit eu urna imperdiet posuere. Aliquam erat volutpat. Ut quis dolor sed libero elementum iaculis blandit eget mi. Integer eu purus ac nibh bibendum ultricies ac et tellus. Aliquam condimentum, metus at commodo accumsan, odio nisi rutrum dui, at tristique lectus nisi ac nisi. Vestibulum consectetur eros quis urna convallis, nec tempor ligula vestibulum.']);
		Scenario::create(['scID' => 8,		'scHeadLine' => 'Quisque tincidunt purus vitae cursus tristique?',		'scDescription'=>'Vestibulum nec leo tincidunt, pharetra felis vel, tristique ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ultricies neque condimentum, luctus enim eu, pretium neque. Quisque id turpis rhoncus, congue neque quis, feugiat diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat.']);
	}

}