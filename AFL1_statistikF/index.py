import altair as alt
import pandas as pd

# Membaca data dari tabel
df = pd.read_csv('Student_Depression_Dataset.csv', header=0)
print(df.head())

# --- 1. Visualisasi Tingkat Depresi Berdasarkan Kondisi Kesehatan ---
hc_all = (
    df.groupby('Health_condition')
    .agg(
        Total=('Depression', 'count'),
        Yes_Count=('Depression', lambda x: (x == 'Yes').sum()),
    )
    .reset_index()
)
hc_all['Percentage'] = (hc_all['Yes_Count'] / hc_all['Total'] * 100).round(2)
hc_order = ['Critical', 'Abnormal', 'Normal', 'Good']

chart1_bars = (
    alt.Chart(hc_all)
    .mark_bar(color='#d95f02', size=40)
    .encode(
        x=alt.X(
            'Health_condition:N',
            title='Kondisi Kesehatan',
            sort=hc_order,
            axis=alt.Axis(labelAngle=0),
        ),
        y=alt.Y(
            'Percentage:Q',
            title='Tingkat Depresi (%)',
            scale=alt.Scale(domain=[0, 110]),
        ),
        tooltip=[
            alt.Tooltip('Health_condition:N', title='Kondisi Kesehatan'),
            alt.Tooltip(
                'Percentage:Q', title='Persentase Depresi (%)', format='.2f'
            ),
            alt.Tooltip('Yes_Count:Q', title='Jumlah Depresi (Ya)'),
            alt.Tooltip('Total:Q', title='Total Mahasiswa'),
        ],
    )
)

chart1_text = chart1_bars.mark_text(
    align='center', baseline='bottom', dy=-5, fontSize=11, fontWeight='bold'
).encode(text=alt.Text('Percentage:Q', format='.1f'))

chart1 = (chart1_bars + chart1_text).properties(
    title=alt.TitleParams(
        text='Tingkat Depresi Mahasiswa Berdasarkan Kondisi Kesehatan',
        subtitle=(
            'Persentase kasus depresi ("Yes") dalam setiap kategori kondisi'
            ' kesehatan'
        ),
        fontSize=14,
        subtitleFontSize=11,
    ),
    width=450,
    height=300,
)
chart1.save('chart_health_condition.json')
chart1.save('chart_health_condition.html')

# --- 2. Visualisasi Tingkat Depresi Berdasarkan Status Hubungan ---
rel_all = (
    df.groupby('Relationship_status')
    .agg(
        Total=('Depression', 'count'),
        Yes_Count=('Depression', lambda x: (x == 'Yes').sum()),
    )
    .reset_index()
)
rel_all['Percentage'] = (rel_all['Yes_Count'] / rel_all['Total'] * 100).round(2)
rel_order = ['Single', 'Complicated', 'In a Relationship']

chart2_bars = (
    alt.Chart(rel_all)
    .mark_bar(color='#7570b3', size=40)
    .encode(
        x=alt.X(
            'Relationship_status:N',
            title='Status Hubungan',
            sort=rel_order,
            axis=alt.Axis(labelAngle=0),
        ),
        y=alt.Y(
            'Percentage:Q',
            title='Tingkat Depresi (%)',
            scale=alt.Scale(domain=[0, 45]),
        ),
        tooltip=[
            alt.Tooltip('Relationship_status:N', title='Status Hubungan'),
            alt.Tooltip(
                'Percentage:Q', title='Persentase Depresi (%)', format='.2f'
            ),
            alt.Tooltip('Yes_Count:Q', title='Jumlah Depresi (Ya)'),
            alt.Tooltip('Total:Q', title='Total Mahasiswa'),
        ],
    )
)

chart2_text = chart2_bars.mark_text(
    align='center', baseline='bottom', dy=-5, fontSize=11, fontWeight='bold'
).encode(text=alt.Text('Percentage:Q', format='.1f'))

chart2 = (chart2_bars + chart2_text).properties(
    title=alt.TitleParams(
        text='Tingkat Depresi Mahasiswa Berdasarkan Status Hubungan',
        subtitle=(
            'Persentase kasus depresi ("Yes") berdasarkan status hubungan'
            ' sosial'
        ),
        fontSize=14,
        subtitleFontSize=11,
    ),
    width=450,
    height=300,
)
chart2.save('chart_relationship_status.json')
chart2.save('chart_relationship_status.html')

# --- 3. Visualisasi Tingkat Depresi Berdasarkan Latar Belakang Ekonomi ---
fb_all = (
    df.groupby('Family_background')
    .agg(
        Total=('Depression', 'count'),
        Yes_Count=('Depression', lambda x: (x == 'Yes').sum()),
    )
    .reset_index()
)
fb_all['Percentage'] = (fb_all['Yes_Count'] / fb_all['Total'] * 100).round(2)
fb_order = ['Lower Middle class', 'Middle class', 'Rich class']

chart3_bars = (
    alt.Chart(fb_all)
    .mark_bar(color='#1b9e77', size=40)
    .encode(
        x=alt.X(
            'Family_background:N',
            title='Latar Belakang Ekonomi Keluarga',
            sort=fb_order,
            axis=alt.Axis(labelAngle=0),
        ),
        y=alt.Y(
            'Percentage:Q',
            title='Tingkat Depresi (%)',
            scale=alt.Scale(domain=[0, 40]),
        ),
        tooltip=[
            alt.Tooltip('Family_background:N', title='Latar Belakang Ekonomi'),
            alt.Tooltip(
                'Percentage:Q', title='Persentase Depresi (%)', format='.2f'
            ),
            alt.Tooltip('Yes_Count:Q', title='Jumlah Depresi (Ya)'),
            alt.Tooltip('Total:Q', title='Total Mahasiswa'),
        ],
    )
)

chart3_text = chart3_bars.mark_text(
    align='center', baseline='bottom', dy=-5, fontSize=11, fontWeight='bold'
).encode(text=alt.Text('Percentage:Q', format='.1f'))

chart3 = (chart3_bars + chart3_text).properties(
    title=alt.TitleParams(
        text='Tingkat Depresi Mahasiswa Berdasarkan Latar Belakang Ekonomi',
        subtitle=(
            'Persentase mahasiswa mengalami depresi menurut kelas ekonomi'
            ' keluarga'
        ),
        fontSize=14,
        subtitleFontSize=11,
    ),
    width=450,
    height=300,
)
chart3.save('chart_family_background.json')
chart3.save('chart_family_background.html')