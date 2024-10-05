<?php

/**
 * Class SMARegister
 * Constants with sma register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     de.codeking.symcon
 * @author      Frank Herrmann <frank@codeking.de>
 * @link        https://codeking.de
 * @link        https://github.com/CodeKing/de.codeking.symcon
 *
 */
class SMARegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'default' => [
            /**
             * Global
             */
            30051 => [
                'name' => 'Device class',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    460 => 'Solar Inverter',
                    8000 => 'All Devices',
                    8001 => 'Solar Inverter',
                    8002 => 'Wind Turbine Inverter',
                    8007 => 'Battery Inverter',
		    8009 => 'Hybrid Solar Inverter',
                    8033 => 'Consumer',
                    8064 => 'Sensor System in General',
                    8065 => 'Electricity meter',
                    8128 => 'Communication device'
                ]
            ],
            30053 => [
                'name' => 'Device-ID',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    9097 => 'SMU8',
                    9098 => 'STP 5000TL-20',
                    9099 => 'STP 6000TL-20',
                    9100 => 'STP 7000TL-20',
                    9101 => 'STP 8000TL-10',
                    9102 => 'STP 9000TL-20',
                    9103 => 'STP 8000TL-20',
                    9104 => 'SB 3000TL-JP-21',
                    9105 => 'SB 3500TL-JP-21',
                    9106 => 'SB 4000TL-JP-21',
                    9107 => 'SB 4500TL-JP-21',
                    9108 => 'SCSMC',
                    9109 => 'SB 1600TL-10',
                    9110 => 'SSM US',
                    9111 => 'SMA radio-controlled socket',
                    9112 => 'WB 2000HF-30',
                    9113 => 'WB 2500HF-30',
                    9114 => 'WB 3000HF-30',
                    9115 => 'WB 2000HFUS-30',
                    9116 => 'WB 2500HFUS-30',
                    9117 => 'WB 3000HFUS-30',
                    9118 => 'VIEW-10',
                    9119 => 'Sunny Home Manager',
                    9120 => 'SMID',
                    9121 => 'Sunny Central 800HE-20',
                    9122 => 'Sunny Central 630HE-20',
                    9123 => 'Sunny Central 500HE-20',
                    9124 => 'Sunny Central 720HE-20',
                    9125 => 'Sunny Central 760HE-20',
                    9126 => 'SMC 6000A-11',
                    9127 => 'SMC 5000A-11',
                    9128 => 'SMC 4600A-11',
                    9129 => 'SB 3800-11',
                    9130 => 'SB 3300-11',
                    9131 => 'STP 20000TL-10',
                    9132 => 'SMA CT Meter',
                    9133 => 'SB 2000HFUS-32',
                    9134 => 'SB 2500HFUS-32',
                    9135 => 'SB 3000HFUS-32',
                    9136 => 'WB 2000HFUS-32',
                    9137 => 'WB 2500HFUS-32',
                    9138 => 'WB 3000HFUS-32',
                    9139 => 'STP 20000TLHE-10',
                    9140 => 'STP 15000TLHE-10',
                    9141 => 'SB 3000US-12',
                    9142 => 'SB 3800US-12',
                    9143 => 'SB 4000US-12',
                    9144 => 'SB 5000US-12',
                    9145 => 'SB 6000US-12',
                    9146 => 'SB 7000US-12',
                    9147 => 'SB 8000US-12',
                    9148 => 'SB 8000TLUS-12',
                    9149 => 'SB 9000TLUS-12',
                    9150 => 'SB 10000TLUS-12',
                    9151 => 'SB 11000TLUS-12',
                    9152 => 'SB 7000TLUS-12',
                    9153 => 'SB 6000TLUS-12',
                    9154 => 'SB 1300TL-10',
                    9155 => 'Sunny Backup 2200',
                    9156 => 'Sunny Backup 5000',
                    9157 => 'Sunny Island 2012',
                    9158 => 'Sunny Island 2224',
                    9159 => 'Sunny Island 5048',
                    9160 => 'SB 3600TL-20',
                    9161 => 'SB 3000TL-JP-22',
                    9162 => 'SB 3500TL-JP-22',
                    9163 => 'SB 4000TL-JP-22',
                    9164 => 'SB 4500TL-JP-22',
                    9165 => 'SB 3600TL-21',
                    9167 => 'Cluster Controller',
                    9168 => 'SC630HE-11',
                    9169 => 'SC500HE-11',
                    9170 => 'SC400HE-11',
                    9171 => 'WB 3000TL-21',
                    9172 => 'WB 3600TL-21',
                    9173 => 'WB 4000TL-21',
                    9174 => 'WB 5000TL-21',
                    9175 => 'SC 250',
                    9176 => 'SMA Meteo Station',
                    9177 => 'SB 240-10',
                    9178 => 'SB 240-US-10',
                    9179 => 'Multigate-10',
                    9180 => 'Multigate-US-10',
                    9181 => 'STP 20000TLEE-10',
                    9182 => 'STP 15000TLEE-10',
                    9183 => 'SB 2000TLST-21',
                    9184 => 'SB 2500TLST-21',
                    9185 => 'SB 3000TLST-21',
                    9186 => 'WB 2000TLST-21',
                    9187 => 'WB 2500TLST-21',
                    9188 => 'WB 3000TLST-21',
                    9206 => 'SC 500CP-JP',
                    9207 => 'SC 850CP',
                    9208 => 'SC 900CP',
                    9209 => 'SC 850 CP-US',
                    9210 => 'SC 900 CP-US',
                    9211 => 'SC 619CP',
                    9212 => 'SMA Meteo Station',
                    9213 => 'SC 800 CP-US',
                    9214 => 'SC 630 CP-US',
                    9215 => 'SC 500 CP-US',
                    9216 => 'SC 720 CP-US',
                    9217 => 'SC 750 CP-US',
                    9218 => 'SB 240 Dev',
                    9219 => 'SB 240-US BTF',
                    9220 => 'Grid Gate-20',
                    9221 => 'SC 500 CP-US/600V',
                    9222 => 'STP 10000TLEE-JP-10',
                    9223 => 'Sunny Island 6.0H',
                    9224 => 'Sunny Island 8.0H',
                    9225 => 'SB 5000SE-10',
                    9226 => 'SB 3600SE-10',
                    9227 => 'SC 800CP-JP',
                    9228 => 'SC 630CP-JP',
                    9229 => 'WebBox-30',
                    9230 => 'Power Reducer Box',
                    9231 => 'Sunny Sensor Counter',
                    9232 => 'Sunny Boy Control',
                    9233 => 'Sunny Boy Control Plus',
                    9234 => 'Sunny Boy Control Light',
                    9293 => 'SB 7700TL-US-22',
                    9294 => 'SB20.0-3SP-40',
                    9295 => 'SB30.0-3SP-40',
                    9296 => 'SC 1000 CP',
                    9297 => 'Zeversolar 1000',
                    9298 => 'SC 2200-10',
                    9299 => 'SC 2200-US-10',
                    9300 => 'SC 2475-EV-10',
                    9301 => 'SB1.5-1VL-40',
                    9302 => 'SB2.5-1VL-40',
                    9303 => 'SB2.0-1VL-40',
                    9304 => 'SB5.0-1SP-US-40',
                    9305 => 'SB6.0-1SP-US-40',
                    9306 => 'SB8.0-1SP-US-40',
                    9307 => 'Energy Meter',
                    9308 => 'ZoneMonitoring',
                    9309 => 'STP 27kTL-US-10',
                    9310 => 'STP 30kTL-US-10',
                    9311 => 'STP 25kTL-JP-30',
                    9312 => 'SSM30',
                    9313 => 'SB50.0-3SP-40',
                    9314 => 'PlugwiseCircle',
                    9315 => 'PlugwiseSting',
                    9316 => 'SCS-1000',
                    9317 => 'SB 5400TL-JP-22',
                    9326 => 'SunnyBoy Storage 2.5',
                    9346 => 'STP Tripower 6.0',
		   19051 => 'Sunny Tripower 10.0 SE'	
                ]
            ],
            30057 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
            ],
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ],
        'sunnyboy' => [
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
        ]
    ];

    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */
            30201 => [
                'name' => 'Status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    35 => 'Error',
                    303 => 'Off',
                    307 => 'OK',
                    455 => 'Warning'
                ]
	    ],
            30535 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => 'Integer.Wh'
            ],
	    30529 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
     
            ],
            30769 => [
                'name' => 'DC 1 current input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30773 => [
                'name' => 'DC 1 power input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
	    30771 => [
		'name' => 'DC 1 voltage input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => 'Volt'
            ],    
            30957 => [
		'name' => 'DC 2 current input',
		'count' => 2,
		'type' => 'S32',
		'format' => 'FIX3',
		'profile' => '~Ampere'
	    ],
	    30961 => [
		'name' => 'DC 2 power input',
		'count' => 2,
		'type' => 'S32',
		'format' => 'FIX0',
		'profile' => 'Watt'
            ],
	    30959 => [
		'name' => 'DC 2 voltage input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => 'Volt'
            ],    
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30777 => [
                'name' => 'Power L1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30779 => [
                'name' => 'Power L2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30781 => [
                'name' => 'Power L3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
	    30845 => [
                'name' => 'Bat ChaStt',					// Aktueller Batterieladezustand
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
		'profile' => 'Prozent'
            ],  
	    30847 => [
		'name' => 'Bat Diag ActlCapacNom',			// Aktuelle Batteriekapazität 
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Prozent'
            ],
	    30849 => [
		'name' => 'Bat TmpVal',			// Aktuelle Batterietemperatur
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX1',
                'profile' => '~Temperature'
            ],
	    30955 => [
		'name' => 'Bat OpStt',			// Batterie Status
		'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    2291 => 'Batterie Standby',
                    3664 => 'Notladebetrieb',
                    2292 => 'Batterie laden',
                    2293 => 'Batterie entladen',
		    16777213 => 'Informationen liegen nicht vor']
                ],		   	
	    30851 => [
		'name' => 'BatVol',			// Spannung der Batterie
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
		'profile' => 'Volt'
	    ],		  
	    31395 => [
		'name' => 'BatDschCurBatDsch',		// Momentane Batterieentladung
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
		'profile' => 'Watt',
	    ],
	    31393 => [
		'name' => 'BatChrg CurBatCha',			// Momentane Batterieladung
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
	    40187 => [
		'name' => 'Bat CapacRtgWh',			// Nennkapazität der Batterie
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Energy.Wh'
            ],   
	    31397 => [
		'name' => 'BatChrg BatChrg',			// Batterieladung der Batterie
                'count' => 4,
                'type' => 'U64',
                'format' => 'FIX0',
                'profile' => 'Energy.Wh'
            ],					   	
	    31401 => [
		'name' => 'BatDsch BatDsch',			// Batterieladung der Batterie
  		'count' => 4,
                'type' => 'U64',
                'format' => 'FIX0',
                'profile' => 'Energy.Wh'
            ],
            30953 => [
		'name' => 'Coolsys Cab TmpVal',			// Batterieladung der Batterie
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX1',
                'profile' => '~Temperature'
            ],
	    40723 => [
                'name' => 'BatUsDm BckDmMin',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Prozent'
            ],
	    30225 => [
                'name' => 'Isolation LeakRis',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Ohm'
            ],
	    30881 => [
                'name' => 'Operation PvGriConn',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    1779 => 'Getrennt',
                    1780 => 'Öffentliches Stromnetz',
                    1781 => 'Inselnetz',
                    16777213 => 'Information liegt nicht vor' ]		   
                ],					
	     33003 => [
                'name' => 'Operation RunStt',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    235 => 'Netzparallelbetrieb',
                    1463 => 'Backup',
                    1469 => 'Herunterfahren',
		    2119 => 'Abregelung',
                    16777213 => 'Information liegt nicht vor']	           
                ]
	]
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'default' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],	    
	    31393 => [
		'name' => 'BatChrg CurBatCha',			// Momentane Batterieladung
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
	    31395 => [
		'name' => 'BatDschCurBatDsch',		// Momentane Batterieentladung
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
		'profile' => 'Watt',
	    ]
		
		
        ],
                'sunnyboy' => [
		            30775 => [
		                'name' => 'AC active power across all phases',
		                'count' => 2,
		                'type' => 'S32',
		                'format' => 'FIX0',
		                'profile' => 'Watt'
		            ]
        ]

    ];
}

