@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data umur</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data umur</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data umur</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1) 
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("umur.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif
            <table id="myTable" class="table table-bordered">
            <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>0 TAHUN (LK)</th>
                        <th>0 TAHUN (PR)</th>
                        <th>1 TAHUN (LK)</th>
                        <th>1 TAHUN (PR)</th>
                        <th>2 TAHUN (LK)</th>
                        <th>2 TAHUN (PR)</th>
                        <th>3 TAHUN (LK)</th>
                        <th>3 TAHUN (PR)</th>
                        <th>4 TAHUN (LK)</th>
                        <th>4 TAHUN (PR)</th>
                        <th>5 TAHUN (LK)</th>
                        <th>5 TAHUN (PR)</th>
                        <th>6 TAHUN (LK)</th>
                        <th>6 TAHUN (PR)</th>
                        <th>7 TAHUN (LK)</th>
                        <th>7 TAHUN (PR)</th>
                        <th>8 TAHUN (LK)</th>
                        <th>8 TAHUN (PR)</th>
                        <th>9 TAHUN (LK)</th>
                        <th>9 TAHUN (PR)</th>
                        <th>10 TAHUN (LK)</th>
                        <th>10 TAHUN (PR)</th>
                        <th>11 TAHUN (LK)</th>
                        <th>11 TAHUN (PR)</th>
                        <th>12 TAHUN (LK)</th>
                        <th>12 TAHUN (PR)</th>
                        <th>13 TAHUN (LK)</th>
                        <th>13 TAHUN (PR)</th>
                        <th>14 TAHUN (LK)</th>
                        <th>14 TAHUN (PR)</th>
                        <th>15 TAHUN (LK)</th>
                        <th>15 TAHUN (PR)</th>
                        <th>16 TAHUN (LK)</th>
                        <th>16 TAHUN (PR)</th>
                        <th>17 TAHUN (LK)</th>
                        <th>17 TAHUN (PR)</th>
                        <th>18 TAHUN (LK)</th>
                        <th>18 TAHUN (PR)</th>
                        <th>19 TAHUN (LK)</th>
                        <th>19 TAHUN (PR)</th>
                        <th>20 TAHUN (LK)</th>
                        <th>20 TAHUN (PR)</th>
                        <th>21 TAHUN (LK)</th>
                        <th>21 TAHUN (PR)</th>
                        <th>22 TAHUN (LK)</th>
                        <th>22 TAHUN (PR)</th>
                        <th>23 TAHUN (LK)</th>
                        <th>23 TAHUN (PR)</th>
                        <th>24 TAHUN (LK)</th>
                        <th>24 TAHUN (PR)</th>
                        <th>25 TAHUN (LK)</th>
                        <th>25 TAHUN (PR)</th>
                        <th>26 TAHUN (LK)</th>
                        <th>26 TAHUN (PR)</th>
                        <th>27 TAHUN (LK)</th>
                        <th>27 TAHUN (PR)</th>
                        <th>28 TAHUN (LK)</th>
                        <th>28 TAHUN (PR)</th>
                        <th>29 TAHUN (LK)</th>
                        <th>29 TAHUN (PR)</th>
                        <th>30 TAHUN (LK)</th>
                        <th>30 TAHUN (PR)</th>
                        <th>31 TAHUN (LK)</th>
                        <th>31 TAHUN (PR)</th>
                        <th>32 TAHUN (LK)</th>
                        <th>32 TAHUN (PR)</th>
                        <th>33 TAHUN (LK)</th>
                        <th>33 TAHUN (PR)</th>
                        <th>34 TAHUN (LK)</th>
                        <th>34 TAHUN (PR)</th>
                        <th>35 TAHUN (LK)</th>
                        <th>35 TAHUN (PR)</th>
                        <th>36 TAHUN (LK)</th>
                        <th>36 TAHUN (PR)</th>
                        <th>37 TAHUN (LK)</th>
                        <th>37 TAHUN (PR)</th>
                        <th>38 TAHUN (LK)</th>
                        <th>38 TAHUN (PR)</th>
                        <th>39 TAHUN (LK)</th>
                        <th>39 TAHUN (PR)</th>
                        <th>40 TAHUN (LK)</th>
                        <th>40 TAHUN (PR)</th>
                        <th>41 TAHUN (LK)</th>
                        <th>41 TAHUN (PR)</th>
                        <th>42 TAHUN (LK)</th>
                        <th>42 TAHUN (PR)</th>
                        <th>43 TAHUN (LK)</th>
                        <th>43 TAHUN (PR)</th>
                        <th>44 TAHUN (LK)</th>
                        <th>44 TAHUN (PR)</th>
                        <th>45 TAHUN (LK)</th>
                        <th>45 TAHUN (PR)</th>
                        <th>46 TAHUN (LK)</th>
                        <th>46 TAHUN (PR)</th>
                        <th>47 TAHUN (LK)</th>
                        <th>47 TAHUN (PR)</th>
                        <th>48 TAHUN (LK)</th>
                        <th>48 TAHUN (PR)</th>
                        <th>49 TAHUN (LK)</th>
                        <th>49 TAHUN (PR)</th>
                        <th>50 TAHUN (LK)</th>
                        <th>50 TAHUN (PR)</th>
                        <th>51 TAHUN (LK)</th>
                        <th>51 TAHUN (PR)</th>
                        <th>52 TAHUN (LK)</th>
                        <th>52 TAHUN (PR)</th>
                        <th>53 TAHUN (LK)</th>
                        <th>53 TAHUN (PR)</th>
                        <th>54 TAHUN (LK)</th>
                        <th>54 TAHUN (PR)</th>
                        <th>55 TAHUN (LK)</th>
                        <th>55 TAHUN (PR)</th>
                        <th>56 TAHUN (LK)</th>
                        <th>56 TAHUN (PR)</th>
                        <th>57 TAHUN (LK)</th>
                        <th>57 TAHUN (PR)</th>
                        <th>58 TAHUN (LK)</th>
                        <th>58 TAHUN (PR)</th>
                        <th>59 TAHUN (LK)</th>
                        <th>59 TAHUN (PR)</th>
                        <th>60 TAHUN (LK)</th>
                        <th>60 TAHUN (PR)</th>
                        <th>61 TAHUN (LK)</th>
                        <th>61 TAHUN (PR)</th>
                        <th>62 TAHUN (LK)</th>
                        <th>62 TAHUN (PR)</th>
                        <th>63 TAHUN (LK)</th>
                        <th>63 TAHUN (PR)</th>
                        <th>64 TAHUN (LK)</th>
                        <th>64 TAHUN (PR)</th>
                        <th>65 TAHUN (LK)</th>
                        <th>65 TAHUN (PR)</th>
                        <th>66 TAHUN (LK)</th>
                        <th>66 TAHUN (PR)</th>
                        <th>67 TAHUN (LK)</th>
                        <th>67 TAHUN (PR)</th>
                        <th>68 TAHUN (LK)</th>
                        <th>68 TAHUN (PR)</th>
                        <th>69 TAHUN (LK)</th>
                        <th>69 TAHUN (PR)</th>
                        <th>70 TAHUN (LK)</th>
                        <th>70 TAHUN (PR)</th>
                        <th>71 TAHUN (LK)</th>
                        <th>71 TAHUN (PR)</th>
                        <th>72 TAHUN (LK)</th>
                        <th>72 TAHUN (PR)</th>
                        <th>73 TAHUN (LK)</th>
                        <th>73 TAHUN (PR)</th>
                        <th>74 TAHUN (LK)</th>
                        <th>74 TAHUN (PR)</th>
                        <th>75 TAHUN (LK)</th>
                        <th>75 TAHUN (PR)</th>
                        <th>76 TAHUN (LK)</th>
                        <th>76 TAHUN (PR)</th>
                        <th>77 TAHUN (LK)</th>
                        <th>77 TAHUN (PR)</th>
                        <th>78 TAHUN (LK)</th>
                        <th>78 TAHUN (PR)</th>
                        <th>79 TAHUN (LK)</th>
                        <th>79 TAHUN (PR)</th>
                        <th>80 TAHUN (LK)</th>
                        <th>80 TAHUN (PR)</th>
                        <th>81 TAHUN (LK)</th>
                        <th>81 TAHUN (PR)</th>
                        <th>82 TAHUN (LK)</th>
                        <th>82 TAHUN (PR)</th>
                        <th>83 TAHUN (LK)</th>
                        <th>83 TAHUN (PR)</th>
                        <th>84 TAHUN (LK)</th>
                        <th>84 TAHUN (PR)</th>
                        <th>85 TAHUN (LK)</th>
                        <th>85 TAHUN (PR)</th>
                        <th>86 TAHUN (LK)</th>
                        <th>86 TAHUN (PR)</th>
                        <th>87 TAHUN (LK)</th>
                        <th>87 TAHUN (PR)</th>
                        <th>88 TAHUN (LK)</th>
                        <th>88 TAHUN (PR)</th>
                        <th>89 TAHUN (LK)</th>
                        <th>89 TAHUN (PR)</th>
                        <th>90 TAHUN (LK)</th>
                        <th>90 TAHUN (PR)</th>
                        <th>91 TAHUN (LK)</th>
                        <th>91 TAHUN (PR)</th>
                        <th>92 TAHUN (LK)</th>
                        <th>92 TAHUN (PR)</th>
                        <th>93 TAHUN (LK)</th>
                        <th>93 TAHUN (PR)</th>
                        <th>94 TAHUN (LK)</th>
                        <th>94 TAHUN (PR)</th>
                        <th>95 TAHUN (LK)</th>
                        <th>95 TAHUN (PR)</th>
                        <th>96 TAHUN (LK)</th>
                        <th>96 TAHUN (PR)</th>
                        <th>97 TAHUN (LK)</th>
                        <th>97 TAHUN (PR)</th>
                        <th>98 TAHUN (LK)</th>
                        <th>98 TAHUN (PR)</th>
                        <th>99 TAHUN (LK)</th>
                        <th>99 TAHUN (PR)</th>
                        <th>100 TAHUN (LK)</th>
                        <th>100 TAHUN (PR)</th>
                        <th>101 TAHUN (LK)</th>
                        <th>101 TAHUN (PR)</th>
                        <th>102 TAHUN (LK)</th>
                        <th>102 TAHUN (PR)</th>
                        <th>103 TAHUN (LK)</th>
                        <th>103 TAHUN (PR)</th>
                        <th>104 TAHUN (LK)</th>
                        <th>104 TAHUN (PR)</th>
                        <th>105 TAHUN (LK)</th>
                        <th>105 TAHUN (PR)</th>
                        <th>106 TAHUN (LK)</th>
                        <th>106 TAHUN (PR)</th>
                        <th>107 TAHUN (LK)</th>
                        <th>107 TAHUN (PR)</th>
                        <th>108 TAHUN (LK)</th>
                        <th>108 TAHUN (PR)</th>
                        <th>109 TAHUN (LK)</th>
                        <th>109 TAHUN (PR)</th>
                        <th>110 TAHUN (LK)</th>
                        <th>110 TAHUN (PR)</th>
                        <th>111 TAHUN (LK)</th>
                        <th>111 TAHUN (PR)</th>
                        <th>112 TAHUN (LK)</th>
                        <th>112 TAHUN (PR)</th>
                        <th>113 TAHUN (LK)</th>
                        <th>113 TAHUN (PR)</th>
                        <th>114 TAHUN (LK)</th>
                        <th>114 TAHUN (PR)</th>
                        <th>115 TAHUN (LK)</th>
                        <th>115 TAHUN (PR)</th>
                        <th>116 TAHUN (LK)</th>
                        <th>116 TAHUN (PR)</th>
                        <th>117 TAHUN (LK)</th>
                        <th>117 TAHUN (PR)</th>
                        <th>118 TAHUN (LK)</th>
                        <th>118 TAHUN (PR)</th>
                        <th>119 TAHUN (LK)</th>
                        <th>119 TAHUN (PR)</th>
                        <th>120 TAHUN (LK)</th>
                        <th>120 TAHUN (PR)</th>
                        <th>121 TAHUN (LK)</th>
                        <th>121 TAHUN (PR)</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($umur as $umur)
                    <tr>
                        <td>{{ $umur->id }}</td>
                        <td>{{ $umur->kode }}</td>
                        <td>{{ $umur->wilayah }}</td>
                        <td>{{ $umur->nol_tahun_lk }}</td>
                        <td>{{ $umur->nol_tahun_pr }}</td>
                        <td>{{ $umur->satu_tahun_lk }}</td>
                        <td>{{ $umur->satu_tahun_pr }}</td>
                        <td>{{ $umur->dua_tahun_lk }}</td>
                        <td>{{ $umur->dua_tahun_pr }}</td>
                        <td>{{ $umur->tiga_tahun_lk }}</td>
                        <td>{{ $umur->tiga_tahun_pr }}</td>
                        <td>{{ $umur->empat_tahun_lk }}</td>
                        <td>{{ $umur->empat_tahun_pr }}</td>
                        <td>{{ $umur->lima_tahun_lk }}</td>
                        <td>{{ $umur->lima_tahun_pr }}</td>
                        <td>{{ $umur->enam_tahun_lk }}</td>
                        <td>{{ $umur->enam_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_tahun_pr }}</td>
                        <td>{{ $umur->delapan_tahun_lk }}</td>
                        <td>{{ $umur->delapan_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_tahun_pr }}</td>
                        <td>{{ $umur->sepuluh_tahun_lk }}</td>
                        <td>{{ $umur->sepuluh_tahun_pr }}</td>
                        <td>{{ $umur->sebelas_tahun_lk }}</td>
                        <td>{{ $umur->sebelas_tahun_pr }}</td>
                        <td>{{ $umur->dua_belas_tahun_lk }}</td>
                        <td>{{ $umur->dua_belas_tahun_pr }}</td>
                        <td>{{ $umur->tiga_belas_tahun_lk }}</td>
                        <td>{{ $umur->tiga_belas_tahun_pr }}</td>
                        <td>{{ $umur->empat_belas_tahun_lk }}</td>
                        <td>{{ $umur->empat_belas_tahun_pr }}</td>
                        <td>{{ $umur->lima_belas_tahun_lk }}</td>
                        <td>{{ $umur->lima_belas_tahun_pr }}</td>
                        <td>{{ $umur->enam_belas_tahun_lk }}</td>
                        <td>{{ $umur->enam_belas_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_belas_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_belas_tahun_pr }}</td>
                        <td>{{ $umur->delapan_belas_tahun_lk }}</td>
                        <td>{{ $umur->delapan_belas_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_belas_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_belas_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->dua_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->dua_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->tiga_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->tiga_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->empat_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->empat_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->lima_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->lima_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->enam_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->enam_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->tujuh_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->tujuh_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->delapan_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->delapan_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_satu_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_dua_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_dua_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_tiga_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_tiga_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_empat_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_empat_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_lima_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_lima_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_enam_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_enam_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_delapan_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_delapan_tahun_pr }}</td>
                        <td>{{ $umur->sembilan_puluh_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->sembilan_puluh_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->seratus_tahun_lk }}</td>
                        <td>{{ $umur->seratus_tahun_pr }}</td>
                        <td>{{ $umur->seratus_satu_tahun_lk }}</td>
                        <td>{{ $umur->seratus_satu_tahun_pr }}</td>
                        <td>{{ $umur->seratus_dua_tahun_lk }}</td>
                        <td>{{ $umur->seratus_dua_tahun_pr }}</td>
                        <td>{{ $umur->seratus_tiga_tahun_lk }}</td>
                        <td>{{ $umur->seratus_tiga_tahun_pr }}</td>
                        <td>{{ $umur->seratus_empat_tahun_lk }}</td>
                        <td>{{ $umur->seratus_empat_tahun_pr }}</td>
                        <td>{{ $umur->seratus_lima_tahun_lk }}</td>
                        <td>{{ $umur->seratus_lima_tahun_pr }}</td>
                        <td>{{ $umur->seratus_enam_tahun_lk }}</td>
                        <td>{{ $umur->seratus_enam_tahun_pr }}</td>
                        <td>{{ $umur->seratus_tujuh_tahun_lk }}</td>
                        <td>{{ $umur->seratus_tujuh_tahun_pr }}</td>
                        <td>{{ $umur->seratus_delapan_tahun_lk }}</td>
                        <td>{{ $umur->seratus_delapan_tahun_pr }}</td>
                        <td>{{ $umur->seratus_sembilan_tahun_lk }}</td>
                        <td>{{ $umur->seratus_sembilan_tahun_pr }}</td>
                        <td>{{ $umur->seratus_sepuluh_tahun_lk }}</td>
                        <td>{{ $umur->seratus_sepuluh_tahun_pr }}</td>
                        <td>{{ $umur->seratus_sebelas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_sebelas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_dua_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_dua_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_tiga_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_tiga_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_empat_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_empat_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_lima_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_lima_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_enam_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_enam_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_tujuh_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_tujuh_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_delapan_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_delapan_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_sembilan_belas_tahun_lk }}</td>
                        <td>{{ $umur->seratus_sembilan_belas_tahun_pr }}</td>
                        <td>{{ $umur->seratus_dua_puluh_tahun_lk }}</td>
                        <td>{{ $umur->seratus_dua_puluh_tahun_pr }}</td>
                        <td>{{ $umur->seratus_dua_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->seratus_dua_puluh_satu_tahun_pr }}</td>
                        <td>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('umur.edit',$umur->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('umur.show',$umur->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach

                    <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <!-- Import Excel -->
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form method="post" action="/statuskawin/import_excel" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <label>Pilih file excel</label>
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </thead>
                </table>
            </tbody>   






                </tbody>
            </table>
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/umur?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection