<?php

use Illuminate\Database\Seeder;
use App\Models\Dependencia;

class DependenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dependencia::create(['id' => '1', 'nombre' => 'Jefatura de Oficina del C. Gobernador', 'acronimo' => 'JEFATURA', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '2', 'nombre' => 'Secretaría General de Gobierno', 'acronimo' => 'SEGOB', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '3', 'nombre' => 'Secretaría de Finanzas', 'acronimo' => 'SEFIN', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '4', 'nombre' => 'Secretaría de Seguridad Pública', 'acronimo' => 'SSP', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '5', 'nombre' => 'Secretaría de Administración', 'acronimo' => 'SAD', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '6', 'nombre' => 'Secretaría de la Función Pública', 'acronimo' => 'SFP', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '7', 'nombre' => 'Secretaría de Economía ', 'acronimo' => 'SEZAC', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '8', 'nombre' => 'Secretaría de Turismo', 'acronimo' => 'SECTURZ', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '9', 'nombre' => 'Secretaría de Obras Públicas', 'acronimo' => 'SECOP', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '10', 'nombre' => 'Secretaría de Educación', 'acronimo' => 'SEDUZAC', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '11', 'nombre' => 'Secretaría de Desarrollo Social ', 'acronimo' => 'SEDESOL', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '12', 'nombre' => 'Secretaría de Salud', 'acronimo' => 'SSALUD', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '13', 'nombre' => 'Secretaría de Desarrollo Urbano, Vivienda y Ordenamiento Territorial', 'acronimo' => 'SEDUVOT', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '14', 'nombre' => 'Secretaría del Agua y Medio Ambiente ', 'acronimo' => 'SAMA', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '15', 'nombre' => 'Secretaría del Campo', 'acronimo' => 'SECAMPO', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '16', 'nombre' => 'Secretaría de las Mujeres ', 'acronimo' => 'SEMUJER', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '17', 'nombre' => 'Secretaría del Zacatecano Migrante', 'acronimo' => 'SEZAMI', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '18', 'nombre' => 'Coordinación General Jurídica', 'acronimo' => 'CGJ', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '19', 'nombre' => 'Coordinación Estatal de Planeación', 'acronimo' => 'COEPLA', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '20', 'nombre' => 'Procuraduria General de Justicia del Estado', 'acronimo' => 'PGJE', 'tipo_dep' => 'DEP']);
    	Dependencia::create(['id' => '61', 'nombre' => 'Sistema Estatal para el Desarrollo Integral de la Familia ', 'acronimo' => 'SDIF', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '62', 'nombre' => 'Consejo Estatal de Desarrollo Económico', 'acronimo' => 'CEDEZ', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '63', 'nombre' => 'Consejo Zacatecano de Ciencia, Tecnología e Innovación ', 'acronimo' => 'COZCYT', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '64', 'nombre' => 'Servicios de Salud de Zacatecas', 'acronimo' => 'SSZ', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '65', 'nombre' => 'Regimen Estatal de Protección Social en Salud', 'acronimo' => 'REPSS', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '67', 'nombre' => 'Instituto Regional del Patrimonio Mundial', 'acronimo' => 'UNESCO', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '68', 'nombre' => 'Instituto de la Defensoría Pública', 'acronimo' => 'IDP', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '69', 'nombre' => 'Instituto de Cultura Física y Deporte del Estado de Zacatecas', 'acronimo' => 'INCUFIDEZ', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '70', 'nombre' => 'Sistema Zacatecano de Radio y Televisión', 'acronimo' => 'SIZART', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '71', 'nombre' => 'Patronato Estatal de promotores Voluntarios', 'acronimo' => 'VOL', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '72', 'nombre' => 'Instituto Zacatecano de Educación para Adultos', 'acronimo' => 'IZEA', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '73', 'nombre' => 'Instituto de Capacitación para el Trabajo', 'acronimo' => 'ICATEZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '74', 'nombre' => 'Instituto Zacatecano de Cultura Ramón López Velarde""', 'acronimo' => 'IZC', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '75', 'nombre' => 'Instituto Zacatecano de Construcción de Escuelas', 'acronimo' => 'INZACE', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '76', 'nombre' => 'Junta de Protección y Conservación de Monumentos y Zonas Típicas del Estado de Zacatecas', 'acronimo' => 'JPCMCZT', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '77', 'nombre' => 'Instituto de la Juventud del Estado de Zacatecas', 'acronimo' => 'INJUZAC', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '78', 'nombre' => 'Instituto para la Atención e Inclusión de las Personas Con Discapacidad en el Estado de Zacatecas', 'acronimo' => 'INCLUSIÓN', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '79', 'nombre' => 'Universidad Politécnica de Zacatecas', 'acronimo' => 'UPZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '80', 'nombre' => 'Universidad Politécnica del Sur de Zacatecas', 'acronimo' => 'UPSZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '81', 'nombre' => 'Instituto Tecnológico Superior de NochistlÃ¡n', 'acronimo' => 'ITSN', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '82', 'nombre' => 'Instituto Tecnológico Superior de Fresnillo', 'acronimo' => 'ITSF', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '83', 'nombre' => 'Instituto Tecnológico Superior de Tlaltenango', 'acronimo' => 'ITSZS', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '84', 'nombre' => 'Instituto Tecnológico Superior de Loreto', 'acronimo' => 'ITSL', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '85', 'nombre' => 'Instituto Tecnológico Superior de Río Grande', 'acronimo' => 'ITSZN', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '86', 'nombre' => 'Instituto Tecnológico Superior de Jerez', 'acronimo' => 'ITSJ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '87', 'nombre' => 'Instituto Tecnológico Superior de Sombrerete', 'acronimo' => 'ITSZO', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '88', 'nombre' => 'Escuela de Conservación y Restauración de Zacatecas Refugio Reyes""', 'acronimo' => 'EECRZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '89', 'nombre' => 'Colegio de Bachilleres del Estado de Zacatecas', 'acronimo' => 'COBAEZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '90', 'nombre' => 'Colegio de Educación Profesional Técnica de Zacatecas', 'acronimo' => 'CONALEP', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '91', 'nombre' => 'Colegio de Estudios Científicos y Tecnológicos del Estado de Zacatecas', 'acronimo' => 'CECYTEZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '92', 'nombre' => 'Instituto de Selección y Capacitación del Estado de Zacatecas', 'acronimo' => 'INSELCAP', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '93', 'nombre' => 'Universidad Tecnológica del Estado de Zacatecas', 'acronimo' => 'UTEZ', 'tipo_dep' => 'ODE']);
    	Dependencia::create(['id' => '95', 'nombre' => 'Comisión Estatal de la Defensa del Contribuyente', 'acronimo' => 'CEDC', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '96', 'nombre' => 'Secretaría Ejecutiva del Sistema Estatal Anticorrupción de Zacatecas', 'acronimo' => 'SESEAZ', 'tipo_dep' => 'OPD']);
    	Dependencia::create(['id' => '97', 'nombre' => 'Centro de Conciliación Laboral del Estado de Zacatecas', 'acronimo' => 'CCLEZ', 'tipo_dep' => 'OPD']);
        Dependencia::create(['id' => '98', 'nombre' => 'Empresa Externa', 'acronimo' => 'EMPRESA', 'tipo_dep' => 'EXT']);
        Dependencia::create(['id' => '99', 'nombre' => 'Ayudamiento de Mazapil', 'acronimo' => 'Mazapli', 'tipo_dep' => 'EXT']);
        Dependencia::create(['id' => '100', 'nombre' => 'Ayudamiento de Fresnillo', 'acronimo' => 'Fresnillo', 'tipo_dep' => 'EXT']);
    }
}
